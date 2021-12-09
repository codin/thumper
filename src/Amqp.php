<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Wire\AMQPTable;

abstract class Amqp
{
    public const NON_PERSISTENT = '1';

    public const PERSISTENT = '2';

    protected AbstractConnection $connection;

    protected AMQPChannel $channel;

    public function __construct(AbstractConnection $connection)
    {
        $this->connection = $connection;
        $this->channel = $this->connection->channel();
    }

    public function declareExchange(Config\Exchange $options): void
    {
        $this->channel->exchange_declare(
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
        $this->channel->basic_qos(
            $options->getPrefetchSize(),
            $options->getPrefetchCount(),
            $options->isGlobal()
        );
    }

    public function declareQueue(Config\Queue $options): void
    {
        $this->channel->queue_declare(
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

    public function bindQueue(Config\Queue $queue, Config\Exchange $exchange): void
    {
        $this->channel->queue_bind($queue->getName(), $exchange->getName(), $routingKey);
    }
}
