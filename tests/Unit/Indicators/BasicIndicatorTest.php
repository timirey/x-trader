<?php

use App\Collections\CandleCollection;
use App\Indicators\RSI;

beforeEach(function () {
    $ohlcv = include 'tests/Fixtures/ohlcv.php';

    $closes = array_column($ohlcv, 'close');

    $this->candles = Mockery::mock(CandleCollection::class);
    $this->candles->shouldReceive('closes')->andReturn($closes);
});

test('basic indicator returns array', function () {
    $indicator = new RSI($this->candles);
    $result = $indicator->calculate();

    expect($result)->toBeArray();
});

test('basic indicator config overwrite', function () {
    $indicator = new RSI($this->candles);

    $reflection = new ReflectionClass($indicator);
    $property = $reflection->getProperty('config');
    $property->setAccessible(true);

    $config = $property->getValue($indicator);

    expect($config['timePeriod'])->toBe(14);

    $indicator = new RSI($this->candles, [
        'timePeriod' => 20,
    ]);

    $config = $property->getValue($indicator);

    expect($config['timePeriod'])->toBe(20);
});
