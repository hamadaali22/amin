<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\InsuranceTypesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SubInsuranceTypeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('website.landingPage');
});
Route::get('/PurchaseFlow/AddVehicle', function () {
    return view('website.addVehicle');
});
Route::get('/PurchaseFlow/checkout', function () {
    return view('website.checkout');
});
Route::get('/PurchaseFlow/priceList', function () {
    return view('website.priceList');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'users' => UserController::class,
    'insurance_types' => InsuranceTypesController::class,
    'sub_insurance_types' => SubInsuranceTypeController::class,
    'drivers' => DriverController::class,
    'cars' => CarController::class,
    'companies' => CompanyController::class,
    'coupons' => CouponController::class,
    'orders' => OrdersController::class,
]);
Route::post('/login', [ApiAuthController::class, 'login'])->name('api.login');
Route::post('/register', [ApiAuthController::class, 'register'])->name('api.register');
Route::post('/forgot-password', [ApiAuthController::class, 'forgot'])->name('api.forgot-password');
