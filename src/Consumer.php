<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Wire\AMQPTable;

class Consumer extends Amqp
{
    protected Config\Consumer $options;

    public function __construct(AbstractConnection $connection, Config\Consumer $options)
    {
        parent::__construct($connection);
        $this->options = $options;
    }

    public function withOptions(Config\Consumer $options): self
    {
        return new self($this->connection, $options);
    }

    public function getOptions(): Config\Consumer
    {
        return $this->options;
    }

    protected function getConsumerTag(): string
    {
        return 'PHPPROCESS_' . getmypid();
    }

    public function consume(callable $callback): void
    {
        $this->prepare();

        $this->getChannel()->basic_consume(
            $this->options->getQueue()->getName(),
            $this->getConsumerTag(),
            $this->options->noLocal(),
            $this->options->noAck(),
            $this->options->isExclusive(),
            $this->options->noWait(),
            $callback,
            $this->options->getTicket(),
            new AMQPTable($this->options->getArguments())
        );

        while (count($this->getChannel()->callbacks)) {
            $this->getChannel()->wait();
        }
    }

    protected function prepare(): void
    {
        $this->declareExchange($this->options->getExchange());

        $qos = $this->options->getQoS();

        if ($qos instanceof Config\QoS) {
            $this->declareQoS($qos);
        }

        $queue = $this->options->getQueue();

        $this->declareQueue($queue);

        $this->bindQueue($queue, $this->options->getExchange(), $queue->getRoutingKey());
    }

    public function cancel(bool $nowait = false): void
    {
        $this->getChannel()->basic_cancel($this->getConsumerTag(), $nowait);
    }
}
