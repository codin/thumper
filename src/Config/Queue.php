<?php

declare(strict_types=1);

namespace Codin\Thumper\Config;

class Queue
{
    use Traits\Arguments;

    protected string $name;

    protected string $routingKey;

    protected bool $passive;

    protected bool $durable;

    protected bool $exclusive;

    protected bool $autoDelete;

    protected bool $nowait;

    protected ?int $ticket;

    public function __construct(
        string $name,
        string $routingKey = '',
        bool $passive = false,
        bool $durable = true,
        bool $exclusive = false,
        bool $autoDelete = false,
        bool $nowait = false,
        array $arguments = [],
        ?int $ticket = null
    ) {
        $this->name = $name;
        $this->routingKey = $routingKey;
        $this->passive = $passive;
        $this->durable = $durable;
        $this->exclusive = $exclusive;
        $this->autoDelete = $autoDelete;
        $this->nowait = $nowait;
        $this->arguments = $arguments;
        $this->ticket = $ticket;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRoutingKey(): string
    {
        return $this->routingKey;
    }

    public function isPassive(): bool
    {
        return $this->passive;
    }

    public function isDurable(): bool
    {
        return $this->durable;
    }

    public function isExclusive(): bool
    {
        return $this->exclusive;
    }

    public function autoDelete(): bool
    {
        return $this->autoDelete;
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
