<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $blogs = [[
            'title' => 'My first blog post',
            'body' => 'This is my first blog post.',
            'status' => 1
        ],
        [
            'title' => 'My second blog post',
            'body' => 'This is my second blog post.',
            'status' => 0
        ],
        [
            'title' => 'My third blog post',
            'body' => 'This is my third blog post.',
            'status' => 1
        ],
        [
            'title' => 'My fourth blog post',
            'body' => 'This is my fourth blog post.',
            'status' => 1
        ]];
        return view('home',compact('blogs'));
    }
}
