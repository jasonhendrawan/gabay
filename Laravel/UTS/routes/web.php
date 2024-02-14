<?php

use App\Http\Controllers\FoodController;
use App\Models\food;
use Database\Seeders\FoodSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FoodController::class, 'getAll']);

Route::get('/{category}/{id}', [FoodController::class, 'getFood']);

Route::get('/{category}', [FoodController::class, 'getCategory']);

// Route::get('/MENUSARAPAN', [FoodController::class, 'sarapan']);
// Route::get('/MAKANMALAM', [FoodController::class, 'malam']);
// Route::get('/DESSERT', [FoodController::class, 'dessert']);
Route::get('/ABOUTUS', [FoodController::class, 'about']);