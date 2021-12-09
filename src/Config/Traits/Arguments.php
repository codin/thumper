<?php

declare(strict_types=1);

namespace Codin\Thumper\Config\Traits;

trait Arguments
{
    protected array $arguments;

    public function setArguments(array $arguments): void
    {
        $this->arguments = $arguments;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }
}
