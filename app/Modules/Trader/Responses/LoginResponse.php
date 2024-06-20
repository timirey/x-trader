<?php

namespace App\Modules\Trader\Responses;

readonly class LoginResponse extends Response
{
    public function __construct(bool $status, protected string $streamSessionId)
    {
        parent::__construct($status);
    }

    public function getStreamSessionId(): string
    {
        return $this->streamSessionId;
    }
}
