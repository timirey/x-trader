<?php

namespace App\Providers;

use App\Contracts\BrokerAuthenticationContract;
use App\Contracts\BrokerCommandContract;
use App\Contracts\BrokerContract;
use App\Facades\Broker;
use App\Services\Brokers\xStation\BrokerAuthentication;
use App\Services\Brokers\xStation\BrokerCommand;
use Illuminate\Support\ServiceProvider;

class BrokerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->bind(BrokerContract::class, Broker::class);

        $this->app->when(Broker::class)
            ->needs(BrokerAuthenticationContract::class)
            ->give(BrokerAuthentication::class);

        $this->app->when(Broker::class)
            ->needs(BrokerCommandContract::class)
            ->give(BrokerCommand::class);
    }
}
