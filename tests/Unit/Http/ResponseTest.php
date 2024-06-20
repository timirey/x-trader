<?php

use App\Modules\Trader\Responses\Response;

it('returns error code correctly', function () {
    $response = new Response(false, '404', 'Not Found');

    expect($response->getErrorCode())->toBe('404');
});

it('returns error description correctly', function () {
    $response = new Response(false, '404', 'Not Found');

    expect($response->getErrorDescr())->toBe('Not Found');
});

it('indicates success correctly', function () {
    $response = new Response(true);

    expect($response->isSuccessful())->toBeTrue();

    $response = new Response(false);

    expect($response->isSuccessful())->toBeFalse();
});

it('creates response from JSON correctly', function () {
    $json = json_encode([
        'status' => false,
        'errorCode' => '500',
        'errorDescr' => 'Internal Server Error',
    ]);

    $response = Response::createFromJson($json);

    expect($response->isSuccessful())->toBeFalse()
        ->and($response->getErrorCode())->toBe('500')
        ->and($response->getErrorDescr())->toBe('Internal Server Error');
});

it('creates successful response from JSON correctly', function () {
    $json = json_encode(['status' => true]);

    $response = Response::createFromJson($json);

    expect($response->isSuccessful())->toBeTrue()
        ->and($response->getErrorCode())->toBeNull()
        ->and($response->getErrorDescr())->toBeNull();
});
