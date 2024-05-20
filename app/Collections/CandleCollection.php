<?php

namespace App\Collections;

use Illuminate\Support\Collection;

class CandleCollection extends Collection
{
    public function closes(): array
    {
        return array_column($this->all(), 'close');
    }

    public function highs(): array
    {
        return array_column($this->all(), 'high');
    }

    public function lows(): array
    {
        return array_column($this->all(), 'low');
    }
}
