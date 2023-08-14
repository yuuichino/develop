<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\WorkController;

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


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories'); 
Route::get('/menus', [MenuController::class, 'index'])->name('menues');  
Route::get('/weights', [WeightController::class, 'index'])->name('weights');  
Route::get('/works', [WorkController::class, 'index'])->name('works');  

//Route::get('/', [PostController::class, 'index']);
//Route::get('/', [MenuController::class, 'index'])->name('menues');  
//Route::get('/', [MenuController::class, 'index'])->name('index');


Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/menus/create', [MenuController::class, 'create']);
Route::get('/weights/create', [WeightController::class, 'create']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/works/create', [WorkController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);
Route::post('/menus', [MenuController::class, 'store']);

Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/menus/{menu}', [MenuController::class ,'show']);
//'/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit']);

Route::put('/posts/{post}', [PostController::class, 'update']);
Route::put('/menus/{menu}', [MenuController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class,'delete']);
Route::delete('/menus/{menu}', [MenuController::class,'delete']);

require __DIR__.'/auth.php';