<?php

use App\Abstracts\AbstractBroker;

it('provides broker() helper method', function () {
    expect(broker())->toBeInstanceOf(AbstractBroker::class);
});
