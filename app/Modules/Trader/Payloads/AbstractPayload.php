<?php

namespace App\Modules\Trader\Payloads;

use AllowDynamicProperties;
use App\Modules\Trader\Interfaces\PayloadInterface;

#[AllowDynamicProperties]
abstract class AbstractPayload implements PayloadInterface
{
    private array $arguments = [];

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function __set(string $name, $value): void
    {
        $this->arguments[$name] = $value;
    }

    public function __get(string $name, $default = null): mixed
    {
        return $this->arguments[$name] ?? $default;
    }
}
