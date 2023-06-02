<?php

use Illuminate\Support\Facades\Route;
use app\Http\Providers\RouteServiceProvide;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use App\Models\Category;

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

//Route::get('products', [Product::class, 'getAllProducts']);
Route::get('categories/{id}', [CategoryController::class,'getByID'])->name('CategoryView');
Route::get('products',[ProductController::class,'getAll'])->name('ProductView');