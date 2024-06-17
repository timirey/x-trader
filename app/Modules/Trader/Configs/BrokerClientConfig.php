<?php

declare(strict_types=1);

namespace App\Modules\Trader\Configs;

class BrokerClientConfig
{
    public function __construct(public string $uri, public string $userId, public string $password)
    {
    }
}
