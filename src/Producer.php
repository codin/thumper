<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Message\AMQPMessage;

class Producer extends Amqp
{
    protected Config\Exchange $exchange;

    protected bool $exchangeReady = false;

    protected array $parameters = [
        'content_type' => 'text/plain',
    ];

    public function __construct(AbstractConnection $connection, Config\Exchange $exchange)
    {
        parent::__construct($connection);
        $this->exchange = $exchange;
    }

    public function withExchange(Config\Exchange $exchange): self
    {
        return new self($this->connection, $exchange);
    }

    public function setParameter(string $key, string $value): void
    {
        $this->parameters[$key] = $value;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function publish(string $messageBody, string $routingKey = ''): void
    {
        if (!$this->exchangeReady) {
            $this->declareExchange($this->exchange);
            $this->exchangeReady = true;
        }

        $this->setParameter('delivery_mode', self::PERSISTENT);

        $message = new AMQPMessage($messageBody, $this->getParameters());

        $this->channel->basic_publish(
            $message,
            $this->exchange->getName(),
            strlen($routingKey) > 0 ? $routingKey : $this->routingKey
        );
    }
}
