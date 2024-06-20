<?php

namespace App\Modules\Trader\Responses;

use App\Modules\Trader\Interfaces\ResponseInterface;

readonly class Response implements ResponseInterface
{
    public function __construct(protected bool $status, protected ?string $errorCode = null, protected ?string $errorDescr = null)
    {
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function getErrorDescr(): ?string
    {
        return $this->errorDescr;
    }

    public function isSuccessful(): bool
    {
        return $this->status;
    }

    public static function createFromJson(string $json): self|static
    {
        $data = json_decode($json, true);

        $status = $data['status'] ?? false;

        if (! $status) {
            return new self(...$data);
        }

        return new static(...$data);
    }
}
