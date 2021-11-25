<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Message\AMQPMessage;

class Consumer extends Amqp
{
    /**
     * Number of messages consumed.
     */
    public int $consumed = 0;

    /**
     * Target number of messages to consume.
     */
    private int $target;

    /**
     * @var callable
     */
    protected $callback;

    public function setCallback(callable $callback): void
    {
        $this->callback = $callback;
    }

    public function consume(int $numOfMessages): void
    {
        $this->target = $numOfMessages;

        $this->setUpConsumer();

        while (count($this->channel->callbacks)) {
            $this->channel->wait();
        }
    }

    public function processMessage(AMQPMessage $message): void
    {
        call_user_func($this->callback, $message->body);
        $message->delivery_info['channel']
            ->basic_ack($message->delivery_info['delivery_tag']);
        $this->consumed++;
        $this->maybeStopConsumer($message);
    }

    protected function maybeStopConsumer(AMQPMessage $message): void
    {
        if ($this->consumed == $this->target) {
            $message->delivery_info['channel']
                ->basic_cancel($message->delivery_info['consumer_tag']);
        }
    }
}
