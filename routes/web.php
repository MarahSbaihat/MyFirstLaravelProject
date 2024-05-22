<?php

use App\Http\Controllers\_HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [_HomeController::class, 'index']) -> name('home');
Route::get('/', function () {return view('home');}) -> name('home');
Route::get('/home-dashboard', _HomeController::class);
Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/login', [LoginController::class, 'handleLogin']) -> name('login.submit');
Route::get('/about', [AboutController::class, 'index']) -> name('about');
Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::get('/blog', function () {return view('blog');}) -> name('blog');
Route::resource('/blog-dashboard', BlogController::class);


Route::get('/album', function () {return view('album');}) -> name('album');
Route::get('/details', function () {return view('details');}) -> name('details');
Route::get('/faqs', function () {return view('faqs');}) -> name('faqs');
Route::get('/portfolio', function () {return view('portfolio');}) -> name('portfolio');
Route::get('/privacyAndPolicy', function () {return view('privacyAndPolicy');}) -> name('PAP');
Route::get('/project', function () {return view('project');}) -> name('project');
Route::get('/services', function () {return view('services');}) -> name('services');
Route::get('/termsAndConditions', function () {return view('termsAndConditions');}) -> name('TAC');

Route::get('/dashboard', function(){return view('dashboard.dashboard');})->name('dashboard');

Route::get('/Blogs/trashed', [BlogController::class, 'trashed'])->name('TrashedBlog');


//fallback
Route::fallback(function(){
    return "page not exist";
});

// Route::get('/about', function () {
//     $about="This is about page";
//     $about2="This is about two";
//     return view('about',compact("about","about2"));
// })->name("about");

//naming
// Route::get('about', function () {
//     return "<h1>About page</h1>";
// })->name('hello');
// Route::get('contact/{id}', function ($id) {
//     // Contact::find($id);
//     return $id;
// })->name('edit.contact');
// Route::get('home', function () {
//     // return "<a href='".route('hello')."'>About</a>";
//     return "<a href='".route('edit.contact', 12)."'>contact</a>";
// });
// Route::get( '/home' , 'HomeController@index')->name("home");

//Group
// Route::group(['prefix'=>'customer'],function(){
//     Route::get('/', function () {
//         return "<h1>customer list</h1>";
//     });
//     Route::get('/create', function () {
//         return "<h1>customer create</h1>";
//     });
//     Route::get('/show', function () {
//         return "<h1>customer show</h1>";
//     });
// });
