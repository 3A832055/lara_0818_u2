<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\HelloController;

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

/*Route::get('home', function () {
    return view('home.index');
});

Route::get('home1', function(){
    return view('home1.index');
});*/

Route::get('home1', [HomeController1::class, 'index']);

Route::get('hello/{name?}', [HelloController::class, 'index'])->name('hello.index');

