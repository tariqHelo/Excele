<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHSSITCBECTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete', function (Blueprint $table) {
            $table->id();
             $table->string('HS92')->nullable();
             $table->string('HS96')->nullable();
             $table->string('HS02')->nullable();
             $table->string('HS07')->nullable();
             $table->string('HS12')->nullable();
             $table->string('HS17')->nullable();
             $table->string('HS1447')->nullable();
             $table->string('BEC4')->nullable();
             $table->string('SITC1')->nullable();
             $table->string('SITC2')->nullable();
             $table->string('SITC3')->nullable();
             $table->string('SITC4')->nullable();
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
        Schema::dropIfExists('h_s__s_i_t_c__b_e_c');
    }
}
