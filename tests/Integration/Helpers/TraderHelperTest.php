<?php

use App\Contracts\TraderContract;

it('provides trader() helper method', function () {
    expect(trader())->toBeInstanceOf(TraderContract::class);
});
