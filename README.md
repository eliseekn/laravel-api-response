# Laravel API Response

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eliseekn/laravel-api-response.svg?style=flat-square)](https://packagist.org/packages/eliseekn/laravel-api-response)
[![Total Downloads](https://img.shields.io/packagist/dt/eliseekn/laravel-api-response.svg?style=flat-square)](https://packagist.org/packages/eliseekn/laravel-api-response)

Send JSON response from your API.

## Installation
```bash
composer require eliseekn/laravel-api-response
```

## Usage

Add `MakeApiResponse` trait where you need to use and use it as follows :

```php
$this->response('success', 'Lorem ipsum dolor sit amet', 201);
$this->response('warning', [
    'key1' => 'value',
    'key2' => 'value'
], 405);

$this->successResponse('Lorem ipsum dolor sit amet');
$this->successResponse([
    'key1' => 'value',
    'key2' => 'value'
]);

$this->errorResponse(...);
```
