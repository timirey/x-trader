<?php

namespace App\Modules\Trader\Responses;

readonly class ErrorResponse extends AbstractResponse
{
    public function __construct(string $status, protected string $errorCode, protected string $errorDescr)
    {
        parent::__construct($status);
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function getErrorDescr(): string
    {
        return $this->errorDescr;
    }
}
