<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WebSocket URI
    |--------------------------------------------------------------------------
    |
    | This option specifies the WebSocket URI used for connecting to the trading platform.
    | You may specify a different URI based on whether you are connecting to a demo or live trading environment.
    |
    */

    'uri' => env('BROKER_URI', 'wss://ws.xtb.com/demo'),

    /*
    |--------------------------------------------------------------------------
    | User Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may specify the user credentials for authenticating with the platform.
    | This includes the user ID and password used to establish a secure connection for trading operations.
    |
    */

    'user_id' => env('BROKER_USER_ID'),
    'password' => env('BROKER_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Default Trading Symbol
    |--------------------------------------------------------------------------
    |
    | The default trading symbol configuration option allows you to specify
    | the symbol that will be used when initiating trades on the platform.
    | This can be overridden as needed for specific trading operations.
    |
    */

    'symbol' => env('BROKER_SYMBOL', 'EURUSD'),
];
