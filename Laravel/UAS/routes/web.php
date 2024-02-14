<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accountctrl;
use App\Http\Controllers\Itemctrl;
use App\Http\Controllers\Orderctrl;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [Accountctrl::class, 'register']);

Route::post('/register', [Accountctrl::class, 'store']);

Route::get('/login', [Accountctrl::class, 'login']);
Route::post('/login', [Accountctrl::class, 'validating']);

Route::get('/logout', [Accountctrl::class, 'logout']);

Route::get('/home', [Itemctrl::class, 'getall']);
Route::get('/item/{id}', [Itemctrl::class, 'getid']);

Route::get('/order/{id}', [Orderctrl::class,'addToOrder']);
Route::get('/order', [Orderctrl::class, 'viewAllOrder']);
Route::get('/delete/{id}', [Orderctrl::class, 'deleteItem']);
Route::get('/checkout', [Orderctrl::class, 'checkout']);
