<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BayarController;

use App\Models\User;


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

//Route::get('Register', function () {
//    return view('frontend.Register');
//});



//Route::middleware(['guest'])->group(function(){
    Route::get('login',[LoginController::class,'index'])->name('index');
    Route::post('cobalogin',[LoginController::class,'cobalogin'])->name('cobalogin');
//});

Route::get('logout',[LoginController::class,'logout'])->name('logout');

    // Route::get('Register',[RegisterController::class,'register'])->name('register');
    Route::post('camp',[RegisterController::class,'camp'])->name('camp');
//Route::get('login', function () {
//    return view('frontend.login');
//});

    Route::get('dashborlogin',function(){
        return view('dashborlogin');
    });
Route::get('dashbor', function () {
    return view('frontend.dashbor');
});

Route::get('rental', function () {
    return view('frontend.rental');
});

Route::get('promo', function () {
    return view('frontend.promo');
});

Route::get('perlengkapan', function () {
    return view('frontend.perlengkapan');
});

Route::get('transaksi', function () {
    return view('frontend.transaksi');
});

Route::get('pembayaran', function () {
    return view('frontend.pembayaran');
});

Route::get('detailPembayaran', function () {
    return view('frontend.detailPembayaran');
});

Route::get('coba', function () {
    return view('frontend.cobadropdown');
});

Route::get('export-pembayaran', [BayarController::class, 'export_bayar']);


// register //
Route::get('/verifikasi', function () {
    return view('frontend.veryfy');
});
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProses']);
Route::get('/email/verify', function () {
    return view('frontend.veryfy');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashbor');
})->middleware(['auth', 'signed'])->name('verification.verify');

// end register //

