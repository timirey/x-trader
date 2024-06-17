<?php

declare(strict_types=1);

namespace App\Modules\Trader\Interfaces;

interface ResponseInterface
{
    public function isSuccessful(): bool;

    public static function createFromJson(string $json): self;
}
