<?php

namespace App\Modules\Trader\Responses;

use App\Modules\Trader\Interfaces\ResponseInterface;

abstract class AbstractResponse implements ResponseInterface
{
    private bool $status;

    public function __construct(bool $status)
    {
        $this->status = $status;
    }

    public function isSuccessful(): bool
    {
        return $this->status;
    }

    public static function createFromJson(string $json): static
    {
        $data = json_decode($json, true);

        return new static(...$data);
    }
}
