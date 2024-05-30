<?php

namespace App\Modules\Trader\Contracts;

use WebSocket\Client;

interface BrokerClientContract
{
    //todo: rename the method name to avoid duplication
    public function getClient(): Client;
}
