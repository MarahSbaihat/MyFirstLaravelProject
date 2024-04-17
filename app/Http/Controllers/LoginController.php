<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        return view('login');
    }

    public function handleLogin(){
        echo $_POST['name'];
        echo '<br>';
        echo $_POST['email'];
        echo '<br>';
        echo $_POST['password'];
        echo '<br>';
    }
}
