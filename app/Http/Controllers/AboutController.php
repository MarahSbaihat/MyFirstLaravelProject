<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $abouts = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('about',compact('abouts'));
    }
}
