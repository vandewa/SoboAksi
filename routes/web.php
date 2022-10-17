<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
//dokumentasi template
Route::get('/documentation', function () {
    return \File::get(public_path() . '/index.html');
});

Auth::routes();

Route::resource('profile', ProfileController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'admin', 'as' => 'admin:'], function () {
        Route::resource('user', ManagementUserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
    });
});
