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
        'delivery_mode' => self::PERSISTENT,
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

        $message = new AMQPMessage($messageBody, $this->getParameters());

        $this->getChannel()->basic_publish(
            $message,
            $this->exchange->getName(),
            $routingKey
        );
    }
}
