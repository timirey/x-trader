<?php

declare(strict_types=1);

namespace App\Modules\Trader\Providers;

use App\Modules\Trader\Contracts\TraderContract;
use App\Modules\Trader\Services\TraderService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TraderServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(TraderContract::class, fn () => new TraderService());
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            TraderContract::class,
        ];
    }
}
