<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Wire\AMQPTable;

abstract class Amqp
{
    protected AbstractConnection $connection;

    protected ?AMQPChannel $channel = null;

    public function __construct(AbstractConnection $connection)
    {
        $this->connection = $connection;
    }

    protected function getChannel(): AMQPChannel
    {
        if ($this->channel instanceof AMQPChannel) {
            return $this->channel;
        }
        return $this->channel = $this->connection->channel();
    }

    public function declareExchange(Config\Exchange $options): void
    {
        $this->getChannel()->exchange_declare(
            $options->getName(),
            $options->getType(),
            $options->isPassive(),
            $options->isDurable(),
            $options->autoDelete(),
            $options->isInternal(),
            $options->noWait(),
            new AMQPTable($options->getArguments()),
            $options->getTicket()
        );
    }

    public function declareQoS(Config\QoS $options): void
    {
        $this->getChannel()->basic_qos(
            $options->getPrefetchSize(),
            $options->getPrefetchCount(),
            $options->isGlobal()
        );
    }

    public function declareQueue(Config\Queue $options): void
    {
        $this->getChannel()->queue_declare(
            $options->getName(),
            $options->isPassive(),
            $options->isDurable(),
            $options->isExclusive(),
            $options->autoDelete(),
            $options->noWait(),
            new AMQPTable($options->getArguments()),
            $options->getTicket()
        );
    }

    public function bindQueue(Config\Queue $queue, Config\Exchange $exchange, string $routingKey = ''): void
    {
        $this->getChannel()->queue_bind($queue->getName(), $exchange->getName(), $routingKey);
    }
}
