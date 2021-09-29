<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbShipigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_shipigns', function (Blueprint $table) {
            $table->id();
            $table->string('shiping_email');
            $table->string('shiping_first_name');
            $table->string('shiping_last_name');
            $table->string('shiping_address');
            $table->string('shiping_mobile_number');
            $table->string('shiping_city');
            
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
        Schema::dropIfExists('tb_shipigns');
    }
}
