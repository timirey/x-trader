<?php

declare(strict_types=1);

it('returns false when x is empty', function () {
    $x = [];
    $y = [1, 2, 3];

    expect(crossover($x, $y))->toBeFalse();
});

it('returns false when y is empty', function () {
    $x = [1, 2, 3];
    $y = [];

    expect(crossover($x, $y))->toBeFalse();
});

it('returns true for a crossover', function () {
    $x = [1, 2, 3, 5];
    $y = [1, 2, 3, 4];

    expect(crossover($x, $y))->toBeTrue();
});

it('returns false for no crossover', function () {
    $x = [1, 2, 3, 4];
    $y = [1, 2, 3, 5];

    expect(crossover($x, $y))->toBeFalse();
});

it('returns false when x is empty for crossunder', function () {
    $x = [];
    $y = [1, 2, 3];

    expect(crossunder($x, $y))->toBeFalse();
});

it('returns false when y is empty for crossunder', function () {
    $x = [1, 2, 3];
    $y = [];

    expect(crossunder($x, $y))->toBeFalse();
});

it('returns true for a crossunder', function () {
    $x = [1, 2, 3, 2];
    $y = [1, 2, 3, 3];

    expect(crossunder($x, $y))->toBeTrue();
});

it('returns false for no crossunder', function () {
    $x = [1, 2, 3, 4];
    $y = [1, 2, 3, 2];

    expect(crossunder($x, $y))->toBeFalse();
});
