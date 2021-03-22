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
        Schema::create('h_s__s_i_t_c__b_e_c', function (Blueprint $table) {
            $table->id();
             $table->integer('HS92')->nullable();
             $table->integer('HS96')->nullable();
             $table->integer('HS02')->nullable();
             $table->integer('HS07')->nullable();
             
             $table->integer('HS12')->nullable();
             $table->integer('HS17')->nullable();
             $table->integer('HS1447')->nullable();
             $table->integer('BEC4')->nullable();
             $table->integer('SITC1')->nullable();
             $table->integer('SITC2')->nullable();
             $table->integer('SITC3')->nullable();
             $table->integer('SITC4')->nullable();
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
