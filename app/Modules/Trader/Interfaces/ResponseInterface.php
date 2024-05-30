<?php

namespace App\Modules\Trader\Interfaces;

interface ResponseInterface
{
    public function isSuccessful(): bool;

    public static function createFromJson(string $json): static;
}
