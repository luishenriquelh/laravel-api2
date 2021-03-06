<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function (){
    return view('site.sobre');
});

Route::get('/home', function(){
    return view('home');
});

// Route::get('/tecnologias', function () {
//     return view('site.tecnologias');
// });

// Route::get('/projetos', function () {
//     return view('projetos');
// });

// Route::get('/contatos', function () {
//     return view('contatos');
// });


// Controller  - Usuarios
Route::get('usuarios', 'UserController@listarTodosUsuarios')->name('listarTodosUsuarios');
Route::get('usuarios/{user}', 'UserController@listarUsuario')->name('listarUsuario');



Route::get('listar-usuario', [UserController::class, 'listarUsuario']);
Route::get('cadastrar-usuario', [UserController::class, 'cadastrarUsuario']);
// Route::get('list-user', [UserController::class, 'listUser']);
// Route::get('usuarios', 'Form\testController@listAllUsers')->name('users');





