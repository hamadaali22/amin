<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained("users")->nullOnDelete();
            $table->foreignId('sub_insurance_id')->nullable()->constrained("sub_insurance_types")->nullOnDelete();
            $table->foreignId('car_id')->nullable()->constrained("cars")->nullOnDelete();
            $table->foreignId('driver_id')->nullable()->constrained("drivers")->nullOnDelete();
            $table->foreignId('company_id')->nullable()->constrained("companies")->nullOnDelete();
            $table->string('insurance_date_start', 10);
            $table->string('insurance_date_end', 10);
            $table->string('payment_id');
            $table->string('iban');
            $table->string('coupon_id');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
