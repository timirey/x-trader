<?php

declare(strict_types=1);

namespace App\Modules\Trader\Interfaces;

interface PayloadInterface
{
    public function getCommand(): string;

    public function getArguments(): array;

    public function toJson(): string;
}
