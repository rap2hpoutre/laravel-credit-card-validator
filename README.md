# Laravel Credit Cart Validator
## Install
Install via composer
```
composer require rap2hpoutre/jacky
```
Add Service Provider to `config/app.php` in `providers` section
```php
Rap2hpoutre\Jacky\ServiceProvider::class,
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
