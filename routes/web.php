<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function (){
    return view('site.sobre');
});

Route::get('/tecnologias', function () {
    return view('site.tecnologias');
});

Route::get('/projetos', function () {
    return view('projetos');
});

Route::get('/contatos', function () {
    return view('contatos');
});
