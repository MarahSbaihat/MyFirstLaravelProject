<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        return view('login');
    }

    public function handleLogin(loginRequest $request) {
        // echo $_POST['name'];
        // echo '<br>';
        // echo $_POST['email'];
        // echo '<br>';
        // echo $_POST['password'];
        // echo '<br>';

        // dd($request->all());

        $request->validate();
        return $request;
    }
}
