# Release Notes

## [0.5.2](https://github.com/timirey/x-trader/compare/0.5.1...0.5.2) - 2024-06-17

* [See issue #49](https://github.com/timirey/x-trader/issues/49)

## [0.5.1](https://github.com/timirey/x-trader/compare/0.5.0...0.5.1) - 2024-06-17

* [See issue #46](https://github.com/timirey/x-trader/issues/46)

## [0.5.0](https://github.com/timirey/x-trader/compare/0.4.1...0.5.0) - 2024-06-17

* Redefined folder structure.
* Enabled strict types.
* Improved abstractions.
* Added responses and payloads.
* Settled broker authentication client service.
* Added environment for XTB broker.

## [0.4.1](https://github.com/timirey/x-trader/compare/0.4.0...0.4.1) - 2024-05-28

* Fixed few docs mistakes: https://timirey.github.io/x-trader/docs.

## [0.4.0](https://github.com/timirey/x-trader/compare/0.3.2...0.4.0) - 2024-05-28

* Launched landing page: https://timirey.github.io/x-trader.

## [0.3.2](https://github.com/timirey/x-trader/compare/0.3.1...0.3.2) - 2024-05-24

* Replaced broker service to act as singleton.

## [0.3.1](https://github.com/timirey/x-trader/compare/0.3.0...0.3.1) - 2024-05-23

* Fixed resolving WWWUSER and WWWGROUP for non-sail startups.

## [0.3.0](https://github.com/timirey/x-trader/compare/0.2.1...0.3.0) - 2024-05-23

* Prepare broker abstractions and service provider.
* Update abstraction for trader service and indicators.
* Fixed facades' accesors to be ::class instead of string.
* Added more integration tests.

## [0.2.1](https://github.com/timirey/x-trader/compare/0.2.0...0.2.1) - 2024-05-20

* Fixed trader helper to support more native indicators.
* Added contract for indicator, now creation of custom indicator is available.
* Added more unit tests.

## [0.2.0](https://github.com/timirey/x-trader/compare/0.1.0...0.2.0) - 2024-05-17

* Added [Laravel Sail](https://laravel.com/docs/11.x/sail).
* Added [Laravel Pulse](https://pulse.laravel.com).
* Added [Laravel Horizon](https://laravel.com/docs/11.x/horizon).

## [0.1.1](https://github.com/timirey/x-trader/compare/0.1.0...0.1.1) - 2024-05-16

* Unit and Integration tests using Pest framework.

## [0.1.0](https://github.com/timirey/x-trader-laravel/releases/tag/0.1.0) - 2024-05-14

* `App\Facades\Indicator` facade to work with indicators from [trader package](https://pecl.php.net/package/trader).
* Alternatively, `indicator()` helper method can be used.
