<?php

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

//Route::get('/', function () {
//    return view('website.index');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('website.index');
Route::get('/get_all_cat/{name}', [\App\Http\Controllers\HomeController::class,'getAllCategories'])->name('website.all.categories');

Route::get('/admin/category/get_category_children', [\App\Http\Controllers\Admin\CategoryCrudController::class, 'get_category_children'])->name('category.children.get');
