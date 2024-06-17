<?php

declare(strict_types=1);

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

    public function toJson(): string
    {
        $data['command'] = $this->getCommand();

        if (! empty($this->getArguments())) {
            $data['arguments'] = $this->getArguments();
        }

        return json_encode($data);
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function __set(string $name, $value): void
    {
        $this->arguments[$name] = $value;
    }

    public function __get(string $name): mixed
    {
        return $this->arguments[$name];
    }
}
