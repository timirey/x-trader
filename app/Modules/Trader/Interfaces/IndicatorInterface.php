<?php

namespace App\Modules\Trader\Interfaces;

interface IndicatorInterface
{
    public function calculate(): array;
}
