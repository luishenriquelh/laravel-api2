<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center"><a href="https://laravel.com" target="_blank">API REST</a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API em Laravel 8

Esse é um API de Relação de Musicas com Laravel 8.x

## Install with Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Set the application key

```
   $ php artisan key:generate
```

## Run migrations and seeds

```
   $ php artisan migrate --seed
```

### API EndPoints

##### Musicas
* Post GET All `http://localhost:8000/api/musicas`
* Post GET Single `http://localhost:8000/api/musicas/1`
* Post POST Create `http://localhost:8000/api/musicas`
* Post PUT Update `http://localhost:8000/api/musicas/1`
* Post DELETE destroy `http://localhost:8000/api/musicas/1`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
