<?php

use App\Http\Controllers\CarBrandController;
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
Route::get('/purchase_flow/add_vehicle', function () {
    return view('website.addVehicle');
});
Route::get('/purchase_flow/checkout', function () {
    return view('website.checkout');
});
Route::get('/purchase_flow/price_list', function () {
    return view('website.priceList');
});

Route::get('/user_profile', function () {
    return view('user_dashboard.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.content');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'users' => UserController::class,
    'insurance_types' => InsuranceTypesController::class,
    'sub_insurance_types' => SubInsuranceTypeController::class,
    'drivers' => DriverController::class,
    'car_brands' => CarBrandController::class,
    'cars' => CarController::class,
    'companies' => CompanyController::class,
    'coupons' => CouponController::class,
    'orders' => OrdersController::class,
]);
// Route::post('/login', [ApiAuthController::class, 'login'])->name('api.login');
// Route::post('/register', [ApiAuthController::class, 'register'])->name('api.register');
// Route::post('/forgot-password', [ApiAuthController::class, 'forgot'])->name('api.forgot-password');
