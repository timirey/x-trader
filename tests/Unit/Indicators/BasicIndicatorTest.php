<?php

use App\Collections\CandleCollection;
use App\Indicators\Indicator;

function createBasicIndicatorClass(CandleCollection $candles, array $config = []): Indicator
{
    return new class($candles, $config) extends Indicator
    {
        protected array $config = [
            'timePeriod' => 14,
        ];

        public function calculate(): array
        {
            return trader_rsi($this->candles->closes(), $this->config['timePeriod']) ?: [];
        }
    };
}

beforeEach(function () {
    $ohlcv = include 'tests/Fixtures/ohlcv.php';

    $closes = array_column($ohlcv, 'close');

    $this->candles = Mockery::mock(CandleCollection::class);
    $this->candles->shouldReceive('closes')->andReturn($closes);
});

test('basic indicator returns array', function () {
    $indicator = createBasicIndicatorClass($this->candles);
    $result = $indicator->calculate();

    expect($result)->toBeArray();
});

test('basic indicator config overwrite', function () {
    $indicator = createBasicIndicatorClass($this->candles);

    $reflection = new ReflectionClass($indicator);
    $property = $reflection->getProperty('config');
    $property->setAccessible(true);

    $config = $property->getValue($indicator);

    expect($config['timePeriod'])->toBe(14);

    $indicator = createBasicIndicatorClass($this->candles, [
        'timePeriod' => 20,
    ]);

    $config = $property->getValue($indicator);

    expect($config['timePeriod'])->toBe(20);
});