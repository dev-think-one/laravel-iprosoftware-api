# Laravel wrapper for IproSoftware Api

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/yaroslawww/laravel-iprosoftware-api.svg?branch=master)](https://travis-ci.org/yaroslawww/laravel-iprosoftware-api) 
[![StyleCI](https://github.styleci.io/repos/195463782/shield?branch=master&style=flat-square)](https://github.styleci.io/repos/195463782)
[![Quality Score](https://img.shields.io/scrutinizer/g/yaroslawww/laravel-iprosoftware-api.svg?b=master)](https://scrutinizer-ci.com/g/yaroslawww/laravel-iprosoftware-api/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/yaroslawww/laravel-iprosoftware-api/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/laravel-iprosoftware-api/?branch=master)
[![PHP Version](https://img.shields.io/travis/php-v/yaroslawww/laravel-iprosoftware-api.svg?style=flat-square)](https://packagist.org/packages/yaroslawww/laravel-iprosoftware-api)
[![Packagist Version](https://img.shields.io/packagist/v/yaroslawww/laravel-iprosoftware-api.svg)](https://packagist.org/packages/yaroslawww/laravel-iprosoftware-api)


**Note**: This package is an wrapper for [ipro-software-api-php](https://github.com/yaroslawww/ipro-software-api-php). All predefined api methods names you can find [here](https://github.com/yaroslawww/ipro-software-api-php/blob/master/src/Traits/HasApiMethods.php)

## Installation

You can install the package via composer:

```bash
composer require yaroslawww/laravel-iprosoftware-api
```

## Usage

You can use `Facade`
``` php
    $response = IproSoftware::getBookingRulesList();

    $bookingRules = json_decode((string)$response->getBody());
```

### .env
```dotenv
IPROSOFTWARE_CLIENT_ID="my-client-id"
IPROSOFTWARE_CLIENT_SECRET="my-secret-key"
IPROSOFTWARE_API_HOST="http://myapp.i-pro3.co.uk"
```

### Config Files

In order to edit the default configuration for this package you may execute:

```bash
php artisan vendor:publish --provider="Angecode\LaravelIproSoft\IproSoftwareProvider" 
```
Since you will typically need to overwrite the assets every time the package is updated, you may use the `--force` flag.

## Testing

``` bash
    ./vendor/bin/phpunit
    # or
    composer test
```

## Security
If you discover any security related issues, please email yaroslav.georgitsa@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.