# Laravel wrapper for IproSoftware Api

![Packagist License](https://img.shields.io/packagist/l/think.studio/laravel-iprosoftware-api?color=%234dc71f)
[![Packagist Version](https://img.shields.io/packagist/v/think.studio/laravel-iprosoftware-api)](https://packagist.org/packages/think.studio/laravel-iprosoftware-api)
[![Total Downloads](https://img.shields.io/packagist/dt/think.studio/laravel-iprosoftware-api)](https://packagist.org/packages/think.studio/laravel-iprosoftware-api)
[![Build Status](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/badges/build.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/build-status/main)
[![Code Coverage](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-iprosoftware-api/?branch=main)

**Note**: This package is an wrapper
for [laravel-iprosoftware-api](https://github.com/dev-think-one/laravel-iprosoftware-api). All predefined api methods
names you can
find [here](https://github.com/dev-think-one/laravel-iprosoftware-api/blob/master/src/Traits/HasApiMethods.php)

## Installation

You can install the package via composer:

```bash
composer require think.studio/laravel-iprosoftware-api
```

## Usage

Using predefined methods:

```php
use LaravelIproSoftwareApi\IproSoftwareFacade as IproSoftware;

/** @var \LaravelIproSoftwareApi\IproApiResponse $response */
$response = IproSoftware::getBookingRulesList();

$bookingRules = $response->json();
```

Add custom methods (you can use any service provider):

```php
use LaravelIproSoftwareApi\IproSoftwareFacade

IproSoftwareFacade::mergeMethods([
  'getReport' => ['get', 'property/%s/reports/1'],
  'getTasks' => ['get', 'tasks'],
]);

/** @var \LaravelIproSoftwareApi\IproApiResponse $response */
$response = IproSoftwareFacade::getReport($selectedProperty->getKey());
```

Direct call using GuzzleHttp:

```php
use LaravelIproSoftwareApi\IproSoftwareFacade

$propertyId = 22;

/** @var \LaravelIproSoftwareApi\IproApiResponse $response */
$response = IproSoftwareFacade::httpClient()->get("property/$propertyId/reports/1", [
  'query' => [
    'foo' => 'bar',
  ],
]);
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
php artisan vendor:publish --provider="LaravelIproSoftwareApi\ServiceProvider" 
```

Since you will typically need to overwrite the assets every time the package is updated, you may use the `--force` flag.

## Testing

```shell
  composer test
```

## Credits

- [![Think Studio](https://think.studio.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
