<?php

namespace App\Modules\Trader\Contracts;

interface BrokerContract
{
    //todo: rename the method name to avoid duplication
    public function getClient(): BrokerClientContract;
}
