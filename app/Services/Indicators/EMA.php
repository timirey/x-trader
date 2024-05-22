<?php

namespace App\Services\Indicators;

use App\Abstracts\AbstractIndicator;

final class EMA extends AbstractIndicator
{
    protected array $config = [
        'timePeriod' => 8,
    ];

    public function calculate(): array
    {
        return trader_ema($this->candles->closes(), $this->config['timePeriod']) ?: [];
    }
}
