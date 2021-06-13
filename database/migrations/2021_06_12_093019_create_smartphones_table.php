<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();

           $table->id()->startingValue(1000);
           $table->string('smartphone_name');
           $table->string('smartphone_brand');
           $table->string('smartphone_inv_level');
           $table->string('smartphone_remarks');
           $table->decimal('smartphone_price', 7, 2);
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
        Schema::dropIfExists('smartphones');
    }
}
