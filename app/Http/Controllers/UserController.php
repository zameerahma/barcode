<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('demo');
    }
    public function AddUserPage(){
        return view('pages.user.add-user');
    }
   
}
