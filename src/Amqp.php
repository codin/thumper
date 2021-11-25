<?php

declare(strict_types=1);

namespace Codin\Thumper;

use InvalidArgumentException;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Message\AMQPMessage;

abstract class Amqp
{
    public const NON_PERSISTENT = '1';

    public const PERSISTENT = '2';

    protected AbstractConnection $connection;

    protected AMQPChannel $channel;

    protected array $exchangeOptions = [
        'passive' => false,
        'durable' => true,
        'auto_delete' => false,
        'internal' => false,
        'nowait' => false,
        'arguments' => null,
        'ticket' => null,
    ];

    protected array $queueOptions = [
        'name' => '',
        'passive' => false,
        'durable' => true,
        'exclusive' => false,
        'auto_delete' => false,
        'nowait' => false,
        'arguments' => null,
        'ticket' => null,
    ];

    protected array $consumerOptions = [
        'qos' => [],
    ];

    protected string $routingKey = '';

    protected array $parameters = [
        'content_type' => 'text/plain',
    ];

    public function __construct(AbstractConnection $connection)
    {
        $this->connection = $connection;
        $this->channel = $this->connection->channel();
    }

    public function setExchangeOptions(array $options): void
    {
        if (!isset($options['name']) || !$this->isValidExchangeName($options['name'])) {
            throw new InvalidArgumentException(
                'You must provide an exchange name'
            );
        }

        if (empty($options['type'])) {
            throw new InvalidArgumentException(
                'You must provide an exchange type'
            );
        }

        $this->exchangeOptions = array_merge(
            $this->exchangeOptions,
            $options
        );
    }

    public function setQueueOptions(array $options): void
    {
        $this->queueOptions = array_merge(
            $this->queueOptions,
            $options
        );
    }

    public function setRoutingKey(string $routingKey): void
    {
        $this->routingKey = $routingKey;
    }

    public function setQos(array $options): void
    {
        $this->consumerOptions['qos'] = array_merge($this->consumerOptions['qos'], $options);
    }

    protected function declareExchange($options): void
    {
        if (isset($this->exchangeOptions['name'])) {
            $this->channel->exchange_declare(
                $this->exchangeOptions['name'],
                $this->exchangeOptions['type'],
                $this->exchangeOptions['passive'],
                $this->exchangeOptions['durable'],
                $this->exchangeOptions['auto_delete'],
                $this->exchangeOptions['internal'],
                $this->exchangeOptions['nowait'],
                $this->exchangeOptions['arguments'],
                $this->exchangeOptions['ticket']
            );

            if (is_array($this->consumerOptions['qos'])) {
                $this->channel->basic_qos(
                    $this->consumerOptions['qos']['prefetch_size'],
                    $this->consumerOptions['qos']['prefetch_count'],
                    $this->consumerOptions['qos']['global']
                );
            }
        }

        $queueDeclaration = $this->channel->queue_declare(
            $this->queueOptions['name'],
            $this->queueOptions['passive'],
            $this->queueOptions['durable'],
            $this->queueOptions['exclusive'],
            $this->queueOptions['auto_delete'],
            $this->queueOptions['nowait'],
            $this->queueOptions['arguments'],
            $this->queueOptions['ticket']
        );

        if (null === $queueDeclaration) {
            throw new \RuntimeException('Failed to declare queue');
        }

        [$queueName] = $queueDeclaration;

        if (isset($this->exchangeOptions['name'])) {
            $this->channel
                ->queue_bind($queueName, $this->exchangeOptions['name'], $this->routingKey);
        }

        $this->channel->basic_consume(
            $queueName,
            $this->getConsumerTag(),
            false,
            false,
            false,
            false,
            function (AMQPMessage $message): void {
                $this->processMessage($message);
            }
        );
    }

    protected function setUpConsumer(): void
    {
        if (isset($this->exchangeOptions['name'])) {
            $this->channel->exchange_declare(
                $this->exchangeOptions['name'],
                $this->exchangeOptions['type'],
                $this->exchangeOptions['passive'],
                $this->exchangeOptions['durable'],
                $this->exchangeOptions['auto_delete'],
                $this->exchangeOptions['internal'],
                $this->exchangeOptions['nowait'],
                $this->exchangeOptions['arguments'],
                $this->exchangeOptions['ticket']
            );

            if (is_array($this->consumerOptions['qos'])) {
                $this->channel->basic_qos(
                    $this->consumerOptions['qos']['prefetch_size'],
                    $this->consumerOptions['qos']['prefetch_count'],
                    $this->consumerOptions['qos']['global']
                );
            }
        }

        $queueDeclaration = $this->channel->queue_declare(
            $this->queueOptions['name'],
            $this->queueOptions['passive'],
            $this->queueOptions['durable'],
            $this->queueOptions['exclusive'],
            $this->queueOptions['auto_delete'],
            $this->queueOptions['nowait'],
            $this->queueOptions['arguments'],
            $this->queueOptions['ticket']
        );

        if (null === $queueDeclaration) {
            throw new \RuntimeException('Failed to declare queue');
        }

        [$queueName] = $queueDeclaration;

        if (isset($this->exchangeOptions['name'])) {
            $this->channel
                ->queue_bind($queueName, $this->exchangeOptions['name'], $this->routingKey);
        }

        $this->channel->basic_consume(
            $queueName,
            $this->getConsumerTag(),
            false,
            false,
            false,
            false,
            function (AMQPMessage $message): void {
                $this->processMessage($message);
            }
        );
    }

    protected function getConsumerTag(): string
    {
        return 'PHPPROCESS_' . getmypid();
    }

    private function isValidExchangeName(string $exchangeName): bool
    {
        return preg_match('/^[A-Za-z0-9_\-\.\;]*$/', $exchangeName);
    }

    public function setParameter(string $key, string $value): void
    {
        $this->parameters[$key] = $value;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}
