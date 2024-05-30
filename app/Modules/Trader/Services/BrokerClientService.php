<?php

namespace App\Modules\Trader\Services;

use App\Modules\Trader\Contracts\BrokerClientContract;
use Illuminate\Support\Facades\Log;
use WebSocket\Client;

class BrokerClientService implements BrokerClientContract
{
    protected Client $client;

    public function __construct(protected string $uri)
    {
        $this->client = new Client($this->uri);
    }

    public function getClient(): Client
    {
        if (! $this->client->isConnected()) {
            Log::error('Client connection could not be established.');
        }

        return $this->client;
    }
}
