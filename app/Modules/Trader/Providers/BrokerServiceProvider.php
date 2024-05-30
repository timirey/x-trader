<?php

namespace App\Modules\Trader\Providers;

use App\Modules\Trader\Brokers\Broker;
use App\Modules\Trader\Brokers\BrokerClient;
use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;
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
            ->give(static fn () => new BrokerClient('wss://ws.xtb.com/demo'));
    }
}
