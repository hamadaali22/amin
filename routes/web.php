<?php

use App\Http\Controllers\CarBrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EndUserController;
use App\Http\Controllers\InsuranceTypesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SubInsuranceTypeController;
use App\Http\Controllers\UserController;
use App\Models\Company;

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
Route::get('/loading_page', function () {
    return view('website.loading_page');
});
Route::get('/loading_page2', function () {
    return view('website.loading_page2');
});
Route::get('/loading_page3', function () {
    return view('website.loading_page3');
});
Route::get('/purchase_flow/add_vehicle', function () {
    return view('website.addVehicle');
});
Route::get('/purchase_flow/checkout', function () {
    return view('website.checkout');
});
Route::get('/purchase_flow/price_list', function () {
    $companies = Company::all();
    
    return view('website.priceList',compact('companies'));
});
Route::get('/car/تأمين-ضد-الغير', function () {
    return view('website.Third_party_insurance');
});
Route::get('/car/التأمين-الشامل', function () {
    return view('website.full_insurance');
});

Route::prefix('/user_profile')->group(function () {
    Route::get('', function () {
        return view('user_dashboard.index');
    });
    Route::get('/purchased_documents', function () {
        return view('user_dashboard.purchased_documents');
    });
    Route::get('/registered_IDs', function () {
        return view('user_dashboard.registered_IDs');
    });
    Route::get('/registered_cars', function () {
        return view('user_dashboard.registered_cars');
    });
    Route::get('/setting', function () {
        return view('user_dashboard.setting');
    });
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

Route::post('/Driver-Info', [EndUserController::class, 'GetDriverInfo'])->name('driver-info');
Route::post('/car-Info', [EndUserController::class, 'GetCarInfo'])->name('car-info');
