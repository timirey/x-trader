<?php

use App\Collections\CandleCollection;
use App\Indicators\RSI;

beforeEach(function () {
    $ohlcv = include 'tests/Fixtures/ohlcv.php';

    $this->closes = array_column($ohlcv, 'close');
});

test('rsi indicator returns array', function () {
    $candlesMock = Mockery::mock(CandleCollection::class);
    $candlesMock->shouldReceive('closes')->andReturn($this->closes);

    $indicator = new RSI($candlesMock);
    $result = $indicator->calculate();

    expect($result)->toBeArray();
});
