<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('glossary', 'GlossaryCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::get('/admin/',[\Backpack\CRUD\app\Http\Controllers\AdminController::class, 'login']);
    Route::crud('item', 'ItemCrudController');
    Route::crud('color', 'ColorCrudController');
}); // this should be the absolute last line of this file
