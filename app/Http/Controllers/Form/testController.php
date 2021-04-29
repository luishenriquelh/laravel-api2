<?php

namespace App\Http\Controllers\Form;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function listAllUsers(){
        $users = User::all();

        return view('listAllUsers', [
            'users' => $users
        ]);
    }
}
