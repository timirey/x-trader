<?php

namespace App\Modules\Trader\Interfaces;

use App\Modules\Trader\Collections\CandleCollection;

interface IndicatorInterface
{
    public function __construct(CandleCollection $candles, array $config = []);

    public function __invoke(): array;

    public function calculate(): array;
}
