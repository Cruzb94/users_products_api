<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1'
], function () {
    // Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    // Route::post('signup', [App\Http\Controllers\AuthController::class, 'signUp'])->name('signUp');

    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');

    Route::resources([
        'users' => UserController::class,
        'products' => ProductController::class,
    ]);
});
