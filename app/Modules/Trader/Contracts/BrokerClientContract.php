<?php

namespace App\Modules\Trader\Contracts;

interface BrokerClientContract
{
    public function __construct(string $uri);
}
