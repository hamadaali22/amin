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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customs_serial_number')->length(10)->nullable();
            $table->bigInteger('customs_form_number')->length(10)->nullable();
            $table->bigInteger('car_id')->length(20);
            $table->integer('car_plate_code')->length(2);
            $table->integer('car_plate_number')->length(5);
            $table->string('production_year');
            $table->string('use_purpose');
            $table->foreignId('car_owner')->nullable()->constrained("drivers")->nullOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained("car_brands")->nullOnDelete();
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
        Schema::dropIfExists('cars');
    }
};
