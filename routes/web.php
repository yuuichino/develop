<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\WorController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index']);  
Route::get('/categories', [CategoryController::class, 'index']);  
Route::get('/menus', [MenuController::class, 'index']);  
Route::get('/weights', [WeightController::class, 'index']);  
Route::get('/works', [WorkController::class, 'index']);  

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class ,'show']);　　
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

require __DIR__.'/auth.php';
