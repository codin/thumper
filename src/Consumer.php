<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Connection\AbstractConnection;

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

    protected function getConsumerTag(): string
    {
        return 'PHPPROCESS_' . getmypid();
    }

    public function consume(callable $callback): void
    {
        $this->prepare();

        $this->channel->basic_consume(
            $this->options->getQueue()->getName(),
            $this->getConsumerTag(),
            $this->options->noLocal(),
            $this->options->noAck(),
            $this->options->isExclusive(),
            $this->options->noWait(),
            $callback,
            $this->options->getTicket(),
            $this->options->getArguments()
        );

        while (count($this->channel->callbacks)) {
            $this->channel->wait();
        }
    }

    protected function prepare(): void
    {
        $this->declareExchange($this->options->getExchange());

        $qos = $this->options->getQoS();

        if ($qos instanceof Config\QoS) {
            $this->declareQoS($qos);
        }

        $this->declareQueue($this->options->getQueue());

        $this->bindQueue($this->options->getQueue(), $this->options->getExchange());
    }

    public function cancel(): void
    {
        $this->channel->basic_cancel($this->getConsumerTag());
    }
}
