<?php

use App\Abstracts\AbstractBroker;
use App\Facades\Broker;

it('provides broker service facade', function () {
    expect(Broker::getFacadeRoot())->toBeInstanceOf(AbstractBroker::class);
});
