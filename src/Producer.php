<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Message\AMQPMessage;

class Producer extends Amqp
{
    protected bool $exchangeReady = false;

    protected array $parameters = [
        'content_type' => 'text/plain',
    ];

    public function setParameter(string $key, string $value): void
    {
        $this->parameters[$key] = $value;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function publish(string $messageBody, Config\Exchange $exchange, string $routingKey = ''): void
    {
        if (!$this->exchangeReady) {
            $this->declareExchange($exchange);
            $this->exchangeReady = true;
        }

        $this->setParameter('delivery_mode', self::PERSISTENT);

        $message = new AMQPMessage($messageBody, $this->getParameters());

        $this->channel->basic_publish(
            $message,
            $exchange->getName(),
            strlen($routingKey) > 0 ? $routingKey : $this->routingKey
        );
    }
}
