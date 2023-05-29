<?php

use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriesController::class, 'index']);
//Route::post('/categorias/create', 'CategoriesController@create')->name('admin.categories.create');
Route::post('/categorias/create', [CategoriesController::class, 'create'])->name('admin.categories.create');

