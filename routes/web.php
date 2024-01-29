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
use App\Http\Livewire\Page\Aksi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\DetailDonasiController;
use App\Http\Livewire\DetailDonasi;
use App\Http\Livewire\Page\DetailBerita;
use App\Http\Livewire\Page\MobileAkun;
use App\Http\Livewire\Page\MobileDonasiku;
use App\Http\Livewire\Page\MobilePostingku;
use App\Http\Livewire\Page\MobileEditProfile;
use App\Http\Livewire\Page\GantiPassword;
use App\Http\Livewire\Page\MobileListAksi;
use App\Http\Controllers\DonasiController;
use App\Http\Livewire\WebListAksi;
use App\Http\Controllers\PembayaranDonasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Livewire\Page\Diaspora;
use App\Http\Livewire\Page\Misi;
use App\Http\Livewire\Page\Visi;
use App\Http\Livewire\Page\Sobo;

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
Route::get('/aksi', Aksi::class)->name('aksi');
Route::get('/detail-aksi/{id}', DetailDonasi::class)->name('detail-donasi');
Route::get('/detail-berita/{id}', DetailBerita::class)->name('detail-berita');
Route::get('/akun-profile', MobileAkun::class)->name('detail-akun');
Route::get('/donasiku', MobileDonasiku::class)->name('donasiku');
Route::get('/postingku', MobilePostingku::class)->name('postingku');
Route::get('/edit-profile', MobileEditProfile::class)->name('edit-profile');
Route::get('/ganti-password', GantiPassword::class)->name('ganti-password');
Route::get('/list-aksi', MobileListAksi::class)->name('list-aksi');
Route::get('/web-list-aksi', WebListAksi::class)->name('web-list-aksi');
Route::get('/auth/google', [GoogleController::class, 'redirectGoogle'])->name('google.login');
Route::get('/auth/google/callback/', [GoogleController::class, 'callbackGoogle']);
Route::get('/visi', Visi::class)->name('visi');
Route::get('/misi', Misi::class)->name('misi');
Route::get('/diaspora', Diaspora::class)->name('diaspora');
Route::get('/sobo', Sobo::class)->name('sobo');



//dokumentasi template
Route::get('documentation', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::get('trusthand-template', function () {
    return File::get(public_path() . '/trusthand-template.html');
});

Auth::routes();

// Route::post('userregister', [UserRegisterController::class, 'store'])->name('userregister');

Route::get('kabupaten', [RegionController::class, 'kabupaten'])->name('kabupaten');
Route::get('kecamatan', [RegionController::class, 'kecamatan'])->name('kecamatan');
Route::get('kelurahan', [RegionController::class, 'kelurahan'])->name('kelurahan');

Route::group(['middleware' => ['auth', 'role:diaspora']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('profile', ProfileController::class);

    Route::group(['prefix' => 'admin', 'as' => 'admin:'], function () {
        Route::resource('posting', PostingController::class);
        Route::resource('user', ManagementUserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('penerima', PenerimaController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('aksi', AksiController::class);
        Route::resource('donasi', DonasiController::class);
        Route::resource('wilayah', WilayahController::class);
        Route::resource('pembayaran-donasi', PembayaranDonasiController::class);
        Route::get('filter', [WilayahController::class, 'index']);
    });
});
