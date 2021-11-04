# Jotform - Laravel Package

This package allows you able to use [Jotform](https://jotform.com) API in Laravel.

## Installation
*Supported Laravel Versions:* **>= 6.x**

Run the following command directly in your Project path:

```
$ composer require izniburak/laravel-jotform
```
or directly add following command in your `composer.json` file.
```
{
    "require": {
        "izniburak/laravel-jotform": "^1.0"
    }
}
```

The service provider of the Package will be **automatically discovered** by Laravel.

After that, you should publish the config file via following command:

```
$ php artisan vendor:publish --provider="Jotform\JotformServiceProvider"
```
Greate! You can start to use **Jotform API** in your Laravel app.

## Usage
You can use Jotform API in two different ways with this package.

1- Use `jotform()` helper function in order to access Jotform API:
```php
<?php 

$myForms = jotform()->getForms();
```
2- Use Facade:
```php
<?php 

use Jotform\Facade\Jotform;

$myForms = Jotform::getForms();
```
**Important:** You can find **all methods** that will be able to use with this package by using [this documentation](https://github.com/jotform/jotform-api-php). (The official PHP package of Jotform) 

## Config
You can change the package configs via `config/jotform.php` file or directly using `.env` file variables.
You can add the variables below in your `.env` file and configure it as you desire.

```
JOTFORM_API_KEY=<YOUR_API_KEY>
JOTFORM_OUTPUT=json
JOTFORM_DEBUG=false
```

## Licence
[MIT Licence](http://opensource.org/licenses/MIT)

## Contributing

1. Fork it ( https://github.com/izniburak/laravel-jotform/fork )
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -am 'Add some feature')
4. Push to the branch (git push origin my-new-feature)
5. Create a new Pull Request

## Contributors

- [izniburak](https://github.com/izniburak) İzni Burak Demirtaş - creator, maintainer

