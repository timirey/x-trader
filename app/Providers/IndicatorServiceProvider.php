<?php

namespace App\Providers;

use App\Contracts\IndicatorContract;
use App\Services\IndicatorService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class IndicatorServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * @inheritdoc
     */
    public function register(): void
    {
        $this->app->singleton('indicator', fn() => new IndicatorService());
    }

    /**
     * @inheritdoc
     */
    public function provides(): array
    {
        return [
            IndicatorContract::class
        ];
    }
}
