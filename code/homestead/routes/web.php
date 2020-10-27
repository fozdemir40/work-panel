<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsItemController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('news', 'NewsItemController@index')->name('news');

Route::get('news/{id}', 'NewsItemController@show')->name('news.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
