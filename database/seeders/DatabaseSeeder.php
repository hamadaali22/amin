<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
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
            'phone' => '0777777777',
            'language' => 'en',
            'password' => Hash::make('12345678'),
        ]);

        $user2 = User::create([
            'firstname' => 'user2',
            'lastname' => 'user2',
            'email' => 'user2@user.com',
            'phone' => '0785258821',
            'language' => 'en',
            'password' => Hash::make('12345678'),
            'role_id' => 2,
        ]);

        $superAdmin = User::create([
            'firstname' => 'super',
            'lastname' => 'Admin',
            'email' => 'super@user.com',
            'phone' => '0785258821',
            'language' => 'en',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
        ]);

        $car = Car::create([
            'customs_number_form' => '354324234',
            'car_brand' => 'hyundai',
            'car_model' => 'avante',
            'car_id' => '544672410',
            'car_plate' => 4244688,
            'production_year' => '2017',
            'use_purpose' => 'شخصي',
            'car_owner' => $user1->id,
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
        $driver = Driver::create([
            'identification_number' => 998566441,
            'birthdate' => '5/22/1995',
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'phone' => '0777555666',
            'driving_percentage' => '40%'
        ]);

        $insurance_types = InsuranceTypes::create([
            'insurance_type' => 'تأمين السيارات'
        ]);
        $sub_insurance_types = SubInsuranceType::create([
            'insurance_id' => $insurance_types->id,
            'sub_insurance_name' => 'ضد الغير',

        ]);

        /*$order = Orders::create([
            'user_id' => $user1->id,
            'sub_insurance_id' => $sub_insurance_types->id,
            'car_id' => $car->id,
            'driver_id' => $driver->id,
            'company_id' => $company->id,
            'insurance_date_start' => '08/15/2022',
            'insurance_date_end' => '08/15/2023',
            'payment_id' => '778881235',
            'coupon_id' => $coupon->id,
            'status' => 'Pending',
        ]);*/
    }
}
