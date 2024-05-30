<?php

namespace App\Brokers\xStation\Payloads;

class BrokerLoginPayload extends AbstractBrokerPayload
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
