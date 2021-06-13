<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerbankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerbank', function (Blueprint $table) {
          //  $table->id();
          //  $table->timestamps();

            $table->id()->startingValue(4000);
            $table->string('powerbank_name');
            $table->string('powerbank_brand');
            $table->string('powerbank_mah_level')->nullable();
            $table->string('powerbank_remarks');
            $table->decimal('powerbank_price', 7, 2);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('powerbank');
    }
}
