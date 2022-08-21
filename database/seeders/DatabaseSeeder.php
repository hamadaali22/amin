<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\Company;
use App\Models\Coupon;
use App\Models\Driver;
use App\Models\InsuranceTypes;
use App\Models\Orders;
use App\Models\SubInsuranceType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'firstname' => 'user1',
            'lastname' => 'user1',
            'email' => 'user1@user.com',
            'phone' => '0781111111',
            'language' => 'en',
            'password' => Hash::make('12345678'),
        ]);

        $user2 = User::create([
             'firstname' => 'user2',
             'lastname' => 'user2',
             'email' => 'user2@user.com',
             'phone' => '0782222222',
             'language' => 'en',
             'password' => Hash::make('12345678'),
             'role_id' => 2,
         ]);

        $superAdmin = User::create([
             'firstname' => 'super',
             'lastname' => 'Admin',
             'email' => 'super@user.com',
             'phone' => '0780000000',
             'language' => 'en',
             'password' => Hash::make('12345678'),
             'role_id' => 1,
         ]);

        $insurance_types = InsuranceTypes::create([
             'insurance_type' => 'تأمين السيارات'
         ]);

        $sub_insurance_types = SubInsuranceType::create([
             'insurance_id' => $insurance_types->id,
             'sub_insurance_name' => 'ضد الغير',
         ]);

        $carBrand = CarBrand::create([
            'car_brand' => 'Kia',
            'car_model' => 'k5',
        ]);

        $driver = Driver::create([
             'identification_number' => 998566441,
             'birthdate' => '22-05-1995',
             'name' => 'ahmad',
             'driving_percentage' => '40%'
         ]);

        $car = Car::create([
             'customs_serial_number' => 3543242340,
             'customs_form_number' => 3543242444,
             'car_id' => '544672410',
             'car_plate_code' => 81,
             'car_plate_number' => 4324,
             'production_year' => '2017',
             'use_purpose' => 'شخصي',
             'car_owner' => $driver->id,
             'brand_id' => $carBrand->id,
            ]);

        $company = Company::create([
            'company_name' => 'tameeni',
        ]);

        $coupon = Coupon::create([
             'coupon_name' => 'tameeni',
             'coupon_code' => 'TAmn',
             'usage_limit' => 40,
             'percentage_discount' => 10,
             'active_from' => '08/15/2022',
             'active_to' => '09/30/2022',
         ]);

        $order = Orders::create([
            'user_id' => $user1->id,
            'sub_insurance_id' => $sub_insurance_types->id,
            'car_id' => $car->id,
            'driver_id' => $driver->id,
            'company_id' => $company->id,
            'insurance_date_start' => '08-15-2022',
            'insurance_date_end' => '08-15-2023',
            'payment_id' => '778881235',
            'iban' => 'jdsajdasdkfd',
            'coupon_id' => $coupon->id,
            'status' => 'Pending',
        ]);
    }
}
