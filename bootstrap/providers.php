<?php

declare(strict_types=1);

return [
    \App\Providers\AppServiceProvider::class,
    \App\Providers\HorizonServiceProvider::class,
    \App\Modules\Trader\Providers\TraderServiceProvider::class,
    \App\Modules\Trader\Providers\BrokerServiceProvider::class,
];
