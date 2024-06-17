<?php

declare(strict_types=1);

use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Contracts\TraderContract;

if (! function_exists('trader')) {
    function trader(): TraderContract
    {
        return app(TraderContract::class);
    }
}

if (! function_exists('broker')) {
    function broker(): BrokerContract
    {
        return app(BrokerContract::class);
    }
}
