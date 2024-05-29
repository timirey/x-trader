<?php

namespace App\Providers;

use App\Brokers\xStation\Broker;
use App\Brokers\xStation\BrokerClient;
use App\Contracts\BrokerClientContract;
use App\Contracts\BrokerContract;
use Illuminate\Support\ServiceProvider;

class BrokerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(BrokerContract::class, Broker::class);

        $this->app->when(Broker::class)
            ->needs(BrokerClientContract::class)
            ->give(static fn() => new BrokerClient('wss://ws.xtb.com/demo'));
    }
}
