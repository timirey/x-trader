<?php

namespace App\Contracts\Broker\Actions;

interface CommandContract
{
    public function buy();

    public function sell();
}
