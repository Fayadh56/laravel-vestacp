<<<<<<< HEAD
# laravel-vestacp
laravel-vestacp is a package designed to make calling the VestaCP API from within a Laravel application quicker and easier.

## Installation instructions

1. Add the package to the require array in composer.json.
```
"require": {
        "php": ">=5.5.9",
        "laravel/framework": "5.1.*",
        "gwiddle/laravel-vestacp": "*"
    },
```
2. Add the Service Provider and Facade to config/app.php
```php
'providers' => [
//...
Gwiddle\LaravelVestaCP\VestaCPServiceProvider::class,
],

'aliases' => [
//...
'VestaCP'   => Gwiddle\LaravelVestaCP\Facades\VestaCP::class,
],
```
3. Configure the required environment variables in .env
```
VESTACP_HOSTNAME=blah.blah.com
VESTACP_USERNAME=admin
VESTACP_PASSWORD=thisissosecure
```
4. Enjoy!

## Basic usage
laravel-vestacp designed to be small and simple. This also means that the number of things you can currently do with it are slim.

***Checking an API return code***

Currently there is a limited ability to check an API return code - at the moment it can only distinguish between a success and a failure.

For simplicity, the _-1_ return code, used to designate an unconfigured setup, is considered a success. This is helpful in development environments.

```php
VestaCP::isSuccessCode(0); //Would return "true"
VestaCP::isSuccessCode(-1); //Would return "true"
VestaCP::isSuccessCode(4); //Would return "false"
```


***Executing an API command***

Executing a VestaCP command is very simple - all you need to do is pass the command you want to execute and the parameters it requires.

For example, to create a user:
```php
VestaCP::call("v-add-user", ["username", "password", "email", "package", "firstname", "lastname"]) //Returns an API response code
```


---

Made with :heart: by the [Gwiddle Development Team](https://gwiddle.co.uk/about-us). 
=======
# laravel-vestacp
>>>>>>> 1c63cc72decacab0243dbdcfcf683f8d89c29b34
