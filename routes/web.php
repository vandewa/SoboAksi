<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AksiController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\WilayahController;
use App\Http\Livewire\Page\Home;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', Home::class)->name('home');
//dokumentasi template
Route::get('documentation', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::get('trusthand-template', function () {
    return File::get(public_path() . '/trusthand-template.html');
});

Auth::routes();

Route::post('userregister', [UserRegisterController::class, 'store'])->name('userregister');

Route::get('kabupaten', [RegionController::class, 'kabupaten'])->name('kabupaten');
Route::get('kecamatan', [RegionController::class, 'kecamatan'])->name('kecamatan');
Route::get('kelurahan', [RegionController::class, 'kelurahan'])->name('kelurahan');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('profile', ProfileController::class);

    Route::group(['prefix' => 'admin', 'as' => 'admin:'], function () {
        Route::resource('user', ManagementUserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('penerima', PenerimaController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('aksi', AksiController::class);
        Route::resource('wilayah', WilayahController::class);
        Route::get('filter', [WilayahController::class, 'index']);
    });
});
