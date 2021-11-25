<?php

declare(strict_types=1);

namespace Codin\Thumper;

use PhpAmqpLib\Message\AMQPMessage;

class Producer extends Amqp
{
    protected bool $exchangeReady = false;

    public function publish(string $messageBody, string $routingKey = ''): void
    {
        if (!$this->exchangeReady) {
            if (isset($this->exchangeOptions['name'])) {
                //declare a durable non autodelete exchange
                $this->channel->exchange_declare(
                    $this->exchangeOptions['name'],
                    $this->exchangeOptions['type'],
                    false,
                    true,
                    false
                );
            }
            $this->exchangeReady = true;
        }

        $this->setParameter('delivery_mode', self::PERSISTENT);

        $message = new AMQPMessage(
            $messageBody,
            $this->getParameters()
        );
        $this->channel->basic_publish(
            $message,
            $this->exchangeOptions['name'],
            !empty($routingKey) ? $routingKey : $this->routingKey
        );
    }
}
