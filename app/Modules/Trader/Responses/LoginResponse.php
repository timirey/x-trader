<?php

namespace App\Modules\Trader\Responses;

class LoginResponse extends AbstractResponse
{
    private string $streamSessionId;

    public function __construct(bool $status, string $streamSessionId)
    {
        parent::__construct($status);

        $this->streamSessionId = $streamSessionId;
    }

    public function getStreamSessionId(): string
    {
        return $this->streamSessionId;
    }
}
