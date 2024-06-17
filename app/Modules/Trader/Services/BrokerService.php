<?php

declare(strict_types=1);

namespace App\Modules\Trader\Services;

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;

class BrokerService implements BrokerContract
{
    public function __construct(public BrokerClientContract $client)
    {
    }

    public function getClient(): BrokerClientContract
    {
        return $this->client;
    }
}
