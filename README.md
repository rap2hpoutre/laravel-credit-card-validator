# Laravel Credit Cart Validator

[![Packagist](https://img.shields.io/packagist/v/rap2hpoutre/laravel-credit-card-validator.svg)]()
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/scrutinizer/build/g/rap2hpoutre/laravel-credit-card-validator.svg?style=flat-square)](https://travis-ci.org/rap2hpoutre/laravel-credit-card-validator)
[![Quality Score](https://img.shields.io/scrutinizer/g/rap2hpoutre/laravel-credit-card-validator.svg?style=flat-square)](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-credit-card-validator)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/27adcd2f-20de-4555-8753-3ece7ee24495/mini.png)](https://insight.sensiolabs.com/projects/27adcd2f-20de-4555-8753-3ece7ee24495)

Adds some minimal validation rules for credit card.
## Install
Install via composer
```
composer require rap2hpoutre/laravel-credit-card-validator
```
Add Service Provider to `config/app.php` in `providers` section
```php
Rap2hpoutre\LaravelCreditCardValidator\ServiceProvider::class,
```

## Usage

Add this to your validation rules:

```php
// Add this in your controller method
$this->validate($request, [
    'credit-card-number' => 'required|ccn',
    'credit-card-date' => 'required|ccd',
    'credit-validation-code' => 'required|cvc',
]);
```
