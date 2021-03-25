<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/categories', [CategoriesController::class, 'cat_index']
)->middleware(['auth'])->name('categories');

Route::get('/categories/new', [CategoriesController::class, 'cat_new']
)->middleware(['auth'])->name('/categories/new');

Route::post('/categories/create_cat', [CategoriesController::class, 'cat_create']
)->middleware(['auth'])->name('/categories/create');

Route::get('/categories/{category}/edit', [CategoriesController::class, 'cat_edit']
)->middleware(['auth'])->name('/categories/{category}/edit');

Route::post('/categories/{category}/update', [CategoriesController::class, 'cat_upd']
)->middleware(['auth'])->name('/categories/{category}/update');

Route::get('/categories/{category}/delete', [CategoriesController::class, 'cat_del']
)->middleware(['auth'])->name('/categories/{category}/delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
