<?php

declare(strict_types=1);

namespace App\Modules\Trader\Payloads;

class LoginPayload extends AbstractPayload
{
    public function __construct(string $userId, string $password)
    {
        $this->userId = $userId;
        $this->password = $password;
    }

    public function getCommand(): string
    {
        return 'login';
    }
}
