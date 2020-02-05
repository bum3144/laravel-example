<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'name' => 'Foo',
        'greeting' => 'Hello~',
    ]);
});

Route::get('/hello', function() {
    // return 'hello';
    return view('hello');
});

Route::get('/test', function(){
    $links = [
        'link01',
        'link02',
        'link03',
        'link04',
        'link05'
    ];

    // return view('welcome2', [
    //     'links' => $links
    // ]);

    // return view('welcome2')->withLinks($links);

    return view('welcome2')->with([
        'links' => $links
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/show', 'HomeController@show')->name('home.show');

Route::get('/create', 'BlogController@create')->name('blogs.create');
Route::post('/create', 'BlogController@store')->name('blogs.store');

Route::get('users/{id}', 'UserDetailController@show')->name('user.details.show');

Route::get('/blogs/{id}', 'BlogController@show')->name('blogs.show');
Route::post('/comments', 'CommentController@store')->name('comments.store');
