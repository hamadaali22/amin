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
        Schema::create('sub_insurance_types', function (Blueprint $table) {
            $table->id();
            $table->string('sub_insurance_name');
            $table->foreignId('insurance_id')->nullable()->constrained("insurance_types")->nullOnDelete();
            //$table->unsignedBigInteger('insurance_id')->references('id')->on('insurance_types')->nullable()->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('sub_insurance_types');
    }
};
