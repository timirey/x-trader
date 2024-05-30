<?php

namespace App\Interfaces;

interface PayloadInterface
{
    public function getArguments(): array;

    public function toJson(): string;

    public function __toString(): string;

    public function __set(string $name, $value): void;

    public function __get(string $name): mixed;
}
