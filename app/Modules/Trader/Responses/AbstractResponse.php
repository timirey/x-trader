<?php

namespace App\Modules\Trader\Responses;

use App\Modules\Trader\Interfaces\ResponseInterface;

abstract readonly class AbstractResponse implements ResponseInterface
{
    public function __construct(protected bool $status)
    {
    }

    public function isSuccessful(): bool
    {
        return $this->status;
    }

    public static function createFromJson(string $json): ErrorResponse|static
    {
        $data = json_decode($json, true);

        $status = $data['status'] ?? false;

        if (! $status) {
            return new ErrorResponse(...$data);
        }

        return new static(...$data);
    }
}
