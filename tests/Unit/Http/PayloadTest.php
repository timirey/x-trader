<?php

use App\Modules\Trader\Payloads\AbstractPayload;

it('initially has no arguments', function () {
    $payload = new class extends AbstractPayload {
        public function getCommand(): string {
            return 'testCommand';
        }
    };

    expect($payload->getArguments())->toBeArray()->toBeEmpty();
});

it('returns correct json when no arguments are set', function () {
    $payload = new class extends AbstractPayload {
        public function getCommand(): string {
            return 'testCommand';
        }
    };

    $expectedJson = json_encode(['command' => 'testCommand']);
    expect($payload->toJson())->toBe($expectedJson);
});

it('returns correct json when arguments are set', function () {
    $payload = new class extends AbstractPayload {
        public function getCommand(): string {
            return 'testCommand';
        }
    };

    $payload->argument1 = 'value1';
    $payload->argument2 = 'value2';

    $expectedJson = json_encode([
        'command' => 'testCommand',
        'arguments' => [
            'argument1' => 'value1',
            'argument2' => 'value2',
        ],
    ]);
    expect($payload->toJson())->toBe($expectedJson);
});

it('toString returns same output as toJson', function () {
    $payload = new class extends AbstractPayload {
        public function getCommand(): string {
            return 'testCommand';
        }
    };

    $payload->argument1 = 'value1';
    $payload->argument2 = 'value2';

    expect((string)$payload)->toBe($payload->toJson());
});

it('sets and gets dynamic properties correctly', function () {
    $payload = new class extends AbstractPayload {
        public function getCommand(): string {
            return 'testCommand';
        }
    };

    $payload->dynamicProp = 'dynamicValue';

    expect($payload->dynamicProp)->toBe('dynamicValue')
        ->and($payload->getArguments())->toHaveKey('dynamicProp', 'dynamicValue');
});
