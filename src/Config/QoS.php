<?php

declare(strict_types=1);

namespace Codin\Thumper\Config;

class QoS
{
    protected int $prefetchSize;

    protected int $prefetchCount;

    protected bool $global;

    public function __construct(
        int $prefetchSize = 1,
        int $prefetchCount = 1,
        bool $global = false
    ) {
        $this->prefetchSize = $prefetchSize;
        $this->prefetchCount = $prefetchCount;
        $this->global = $global;
    }

    public function getPrefetchSize(): int
    {
        return $this->prefetchSize;
    }

    public function getPrefetchCount(): int
    {
        return $this->prefetchCount;
    }

    public function isGlobal(): bool
    {
        return $this->global;
    }
}
