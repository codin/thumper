<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Message\AMQPMessage;

class Consumer extends Amqp
{
    protected function getConsumerTag(): string
    {
        return 'PHPPROCESS_' . getmypid();
    }

    public function consume(Config\Consumer $options, callable $callback): void
    {
        $this->prepare($options);

        $this->channel->basic_consume(
            $options->getQueue()->getName(),
            $this->getConsumerTag(),
            $options->noLocal(),
            $options->noAck(),
            $options->isExclusive(),
            $options->noWait(),
            $callback,
            $options->getTicket(),
            $options->getArguments()
        );

        while (count($this->channel->callbacks)) {
            $this->channel->wait();
        }
    }

    protected function prepare(Config\Consumer $options): void
    {
        $this->declareExchange($options->getExchange());

        $qos = $options->getQoS();

        if ($qos instanceof Config\QoS) {
            $this->declareQoS($qos);
        }

        $this->declareQueue($options->getQueue());

        $this->bindQueue($options->getQueue(), $options->getExchange());
    }

    public function cancel(): void
    {
        $this->channel->basic_cancel($this->getConsumerTag());
    }
}
