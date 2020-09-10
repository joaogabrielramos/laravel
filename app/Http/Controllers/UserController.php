<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller

{
    public function listUser()
    {
        $user = new User();
        $user->name = 'João Gabriel';
        $user->email = 'joaogabriel.ramos@ufrj.br';
        $user->password = hash::make('123');
        $user->save();
        

        $user = User::where('id','=',1)->first();
        return view('listUser',[
            'user'=> $user
        ]);
    }
}
