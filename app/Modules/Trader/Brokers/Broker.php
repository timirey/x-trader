<?php

namespace App\Modules\Trader\Brokers;

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;

class Broker implements BrokerContract
{
    public function __construct(public BrokerClientContract $client)
    {
    }

    public function getClient(): BrokerClientContract
    {
        return $this->client;
    }
}
