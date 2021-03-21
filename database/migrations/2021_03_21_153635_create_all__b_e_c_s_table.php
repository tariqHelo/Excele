<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllBECSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all__b_e_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('Classification')->nullable();
            $table->string('Code')->nullable();
            $table->string('Description')->nullable();
            $table->string('ParentCode')->nullable();
            $table->string('Level')->nullable();
            $table->string('IsBasicLevel')->nullable();

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
        Schema::dropIfExists('all__b_e_c_s');
    }
}
