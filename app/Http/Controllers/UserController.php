<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function listUser()
    // {
    //     // $user = new User();
    //     // $user->name = 'Luis Henrique';
    //     // $user->email = 'luis.lhsn@gmail.com';
    //     // $user->password = Hash::make('123456');
    //     // $user->save(); 

    //     // echo "<h1>Listagem de Usuário</h1>";
    //     $user = User::where('id', '=', 1)->first();
        
    //     return view('listUser', [
    //         'user' => $user
    //     ]);
    // }

    public function listarUsuario(User $user)
    {        
        return view('listarUsuario', [
            'user' => $user
        ]);
    }    

    public function listarTodosUsuarios(){
        $users = User::all();
        return view('listarTodosUsuarios', [
            'users' => $users
        ]);
    }

    public function cadastrarUsuario()
    {
        $user = new User();
        $user->name = 'Luis Carlos';
        $user->email = 'luis.carlos@gmail.com';
        $user->password = Hash::make('123456');
        $user->save(); 

        return view('listarUsuario', [
            'user' => $user
        ]);
    }  

}