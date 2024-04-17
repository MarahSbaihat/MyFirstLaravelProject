<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
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
