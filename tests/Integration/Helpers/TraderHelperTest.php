<?php

use App\Modules\Trader\Contracts\TraderContract;

it('provides trader() helper method', function () {
    expect(trader())->toBeInstanceOf(TraderContract::class);
});
