<?php

namespace App\Brokers;

use App\Contracts\BrokerClientContract;
use WebSocket\Client;

abstract class AbstractBrokerClient implements BrokerClientContract
{
    protected Client $client;

    public function __construct(protected string $uri)
    {
        $this->client = new Client($this->uri);
    }
}
