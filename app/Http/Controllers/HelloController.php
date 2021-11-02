<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HelloController;

class HelloController extends Controller
{
    //
    Route::get('hello/{name?}',[HelloController::class,'index'])->name('hello.index');
}
