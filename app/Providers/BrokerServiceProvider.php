<?php

namespace App\Providers;

use App\Brokers\XTB;
use App\Contracts\BrokerContract;
use Illuminate\Support\ServiceProvider;

class BrokerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(BrokerContract::class, XTB::class);
        //
        //        $this->app->when(XStationBroker::class)
        //            ->needs(BrokerAuthenticationContract::class)
        //            ->give(XStationAuthentication::class);
        //
        //        $this->app->when(XStationBroker::class)
        //            ->needs(BrokerCommandContract::class)
        //            ->give(XStationCommand::class);
        //
        //        $this->app->when(XStationBroker::class)
        //            ->needs(BrokerClientContract::class)
        //            ->give(XStationClient::class);
    }
}
