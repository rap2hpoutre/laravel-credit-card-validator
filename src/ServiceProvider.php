<?php
namespace Rap2hpoutre\LaravelCreditCardValidator;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('ccn', function($attribute, $value, $parameters, $validator) {
            return CreditCard::validCreditCard($value)['valid'];
        });

        \Validator::extend('ccd', function($attribute, $value, $parameters, $validator) {
            try {

            } catch(\Exception $e) {
                return false;
            }
            $value = explode('/', $value);
            return CreditCard::validDate($value[0], $value[1]);
        });

        \Validator::extend('cvc', function($attribute, $value, $parameters, $validator) {
            return ctype_digit($value) && strlen($value) == 3;
        });
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 
    }
}
