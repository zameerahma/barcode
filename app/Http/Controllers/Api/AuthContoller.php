<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthContoller extends Controller
{
    public function CreateUser(Request $request){
        $fields=$request->validate([
          'name'=> 'required|string',
          'email'=> 'required|string|unique:users,email',
          'password'=>'required|string|confirmed'
        ]);
        $user=User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>$fields['password'],
        ]);
        $token=$user->createToken('Api Token')->plainTextToken;
        $response=[
            'user'=> $user,
            'token'=> $token,
        ];
        return response($response,201);

    }
}
