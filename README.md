<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center"><a href="https://laravel.com" target="_blank">API REST</a></p>


## API em Laravel 8

Esse é um API de Relação de Musicas com Laravel 8.x

## Instalar com Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## Definir ambiente

```
    $ cp .env.example .env
```

## Defina a chave do aplicativo

```
   $ php artisan key:generate
```

## Execute  migrations e seeds

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

<p align='center'>
 :mailbox_with_no_mail: Contact <br><br>
</p>
<p align="center">
    <a href="mailto:luishenriquelh.luis.lhsn@gmail.com">
        <img src="https://img.shields.io/badge/gmail-D14836?&style=for-the-badge&logo=gmail&logoColor=white&link=mailto:luishenriquelh.luis.lhsn@gmail.com">
    </a>
    <a href="https://www.linkedin.com/in/luishenriquelh/">
    <img src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />
  </a>
  <a href="https://instagram.com/luishenrique.sn">
    <img src="https://img.shields.io/badge/instagram-%23E4405F.svg?&style=for-the-badge&logo=instagram&logoColor=white" />        
  </a>
<p>
     ## Desenvolvido com :green_heart: por Luis Henrique

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
