<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return redirect()-> route('login');
});

Auth::routes();

Route::resource('items', ItemController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/orderlist', [App\Http\Controllers\ItemController::class, 'list'])->name('orderlist');

//Route::view('/orderlist', 'Orderlist');

//Route::resource('item', 'App\Http\Controllers\ItemController');
