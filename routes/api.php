<?php

use App\Http\Controllers\Api\CodeCheckController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\OtpLoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\VerifyOtpLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiProfileController;
use App\Http\Controllers\Api\ApiAksiController;
use App\Http\Controllers\Api\ApiAksiDukungController;
use App\Http\Controllers\Api\ApiAksiPenerimaController;
use App\Http\Controllers\Api\ApiAksiPhotoController;
use App\Http\Controllers\Api\ApiAksiPartisipasiController;
use App\Http\Controllers\Api\ApiAksiCommentController;
use App\Http\Controllers\Api\ApiPenerimaController;
use App\Http\Controllers\Api\DonasiPaymentController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LogoutController::class)->name('logout');

Route::post('password/email',  ForgotPasswordController::class);
Route::post('password/code/check', CodeCheckController::class);
Route::post('password/reset', ResetPasswordController::class);

Route::post('request_otp', OtpLoginController::class);
Route::post('verify_otp', VerifyOtpLoginController::class);
Route::post('xendit/callback',[DonasiPaymentController::class, 'callback']);
Route::post('xendit/callback/ewallet',[DonasiPaymentController::class, 'ewallet']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::resource('profile', ApiProfileController::class);
    Route::resource('aksi', ApiAksiController::class);
    Route::resource('aksi-dukung', ApiAksiDukungController::class);
    Route::resource('aksi-penerima', ApiAksiPenerimaController::class);
    Route::resource('aksi-photo', ApiAksiPhotoController::class);
    Route::resource('aksi-partisipasi', ApiAksiPartisipasiController::class);
    Route::resource('aksi-comment', ApiAksiCommentController::class);
    Route::resource('penerima', ApiPenerimaController::class);
    Route::post('donasi', [DonasiPaymentController::class, 'store']);
});

