<?php

declare(strict_types=1);

namespace Codin\Thumper\Config;

class Consumer
{
    protected Exchange $exchange;

    protected Queue $queue;

    protected ?QoS $qos;

    protected bool $noLocal;

    protected bool $noAck;

    protected bool $exclusive;

    protected bool $nowait;

    protected array $arguments;

    protected ?int $ticket;

    public function __construct(
        Exchange $exchange,
        Queue $queue,
        ?QoS $qos = null,
        bool $noLocal = true,
        bool $noAck = false,
        bool $exclusive = false,
        bool $nowait = false,
        array $arguments = [],
        ?int $ticket = null
    ) {
        $this->exchange = $exchange;
        $this->queue = $queue;
        $this->qos = $qos;
        $this->noLocal = $noLocal;
        $this->noAck = $noAck;
        $this->exclusive = $exclusive;
        $this->nowait = $nowait;
        $this->arguments = $arguments;
        $this->ticket = $ticket;
    }

    public function getExchange(): Exchange
    {
        return $this->exchange;
    }

    public function getQueue(): Queue
    {
        return $this->queue;
    }

    public function getQoS(): ?QoS
    {
        return $this->qos;
    }

    public function noLocal(): bool
    {
        return $this->noLocal;
    }

    public function noAck(): bool
    {
        return $this->noAck;
    }

    public function isExclusive(): bool
    {
        return $this->exclusive;
    }

    public function noWait(): bool
    {
        return $this->nowait;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function getTicket(): ?int
    {
        return $this->ticket;
    }
}
