# Fortify views for Bulma

[![Maintainability](https://api.codeclimate.com/v1/badges/67153b6fa37b69b167fd/maintainability)](https://codeclimate.com/github/kawax/fortify-bulma/maintainability)

https://bulma.io/

## Available views
- register
- login
- forgot-password
- reset-password
- verify-email
- confirm-password

### Unavailable
- two-factor-challenge

This is an experimental package so not all views are available.

## Requirements
- PHP >= 7.3
- Laravel >= 8.0
- Fortify >= 1.5

## Installation
Before install this package, you should install `laravel/fortify` (without Jetstream)
https://github.com/laravel/fortify

```
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
```

Add `App\Providers\FortifyServiceProvider::class,` to `config/app.php`

```
composer require revolution/fortify-bulma
```

Add `Fortify::viewPrefix('fortify-bulma::');` to `FortifyServiceProvider@boot`

```php
    public function boot()
    {
        Fortify::viewPrefix('fortify-bulma::');

        //
    }
```

## Publish views

```
php artisan vendor:publish --tag=fortify-bulma
```

Publish to `/resources/views/vendor/fortify-bulma`

You can customize any files.

## Demo
https://github.com/kawax/fortify-project/tree/bulma

## LICENSE
MIT  
