# Lumen Rest Api with JWT Authentication
## Installation and Usage

1. Clone this repository :
```
https://github.com/zrruziev/lumen-rest-api-with-JWT
```

2. Install composer packages :
```
cd lumen-rest-api-with-JWT
composer install
```

3. Create and setup .env file :
   * Make a `.env` file and put database credentials in .env file :
    ```
    copy .env.example .env
    ```
    * Install lumen-key-generator from [`flipboxstudio/lumen-generate`](https://github.com/flipboxstudio/lumen-generator) repo
    * Generate a `app_key` :
    ```
    php artisan key:generate
    ```
    * Install  [`jwt-auth-lumen`](https://jwt-auth.readthedocs.io/en/develop/lumen-installation/)
    * Generate `jwt_secret` :
    ```
    php artisan jwt:secret
    ```
    
4. Migrate and insert records :
```
php artisan migrate
```



# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


