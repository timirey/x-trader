<?php

namespace App\Contracts;

interface BrokerClientContract
{
    public function __construct(string $uri);
}
