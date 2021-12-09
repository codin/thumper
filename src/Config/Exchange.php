<?php

declare(strict_types=1);

namespace Codin\Thumper\Config;

use InvalidArgumentException;
use PhpAmqpLib\Exchange\AMQPExchangeType;

class Exchange
{
    use Traits\Arguments;

    protected string $name;

    protected string $type;

    protected bool $passive;

    protected bool $durable;

    protected bool $autoDelete;

    protected bool $internal;

    protected bool $nowait;

    protected ?int $ticket;

    public function __construct(
        string $name,
        string $type,
        bool $passive = false,
        bool $durable = true,
        bool $autoDelete = false,
        bool $internal = false,
        bool $nowait = false,
        array $arguments = [],
        ?int $ticket = null
    ) {
        if (!$this->isValidExchangeName($name)) {
            throw new InvalidArgumentException(
                'You must provide an exchange name'
            );
        }

        if (!in_array($type, [
            AMQPExchangeType::DIRECT,
            AMQPExchangeType::FANOUT,
            AMQPExchangeType::TOPIC,
            AMQPExchangeType::HEADERS,
        ])) {
            throw new InvalidArgumentException(
                'You must provide a valid exchange type'
            );
        }

        $this->name = $name;
        $this->type = $type;
        $this->passive = $passive;
        $this->durable = $durable;
        $this->autoDelete = $autoDelete;
        $this->internal = $internal;
        $this->nowait = $nowait;
        $this->arguments = $arguments;
        $this->ticket = $ticket;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function isValidExchangeName(string $exchangeName): bool
    {
        return preg_match('/^[A-Za-z0-9_\-\.\;]*$/', $exchangeName) === 1;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isPassive(): bool
    {
        return $this->passive;
    }

    public function isDurable(): bool
    {
        return $this->durable;
    }

    public function autoDelete(): bool
    {
        return $this->autoDelete;
    }

    public function isInternal(): bool
    {
        return $this->internal;
    }

    public function noWait(): bool
    {
        return $this->nowait;
    }

    public function getTicket(): ?int
    {
        return $this->ticket;
    }
}
