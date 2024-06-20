<?php

namespace App\Modules\Trader\Interfaces;

interface ResponseInterface
{
    public function isSuccessful(): bool;

    public function getErrorCode(): ?string;

    public function getErrorDescr(): ?string;

    public static function createFromJson(string $json): self;
}
