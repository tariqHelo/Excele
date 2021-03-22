<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCPCRev21TranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_p_c_rev_2_1_translation', function (Blueprint $table) {
            $table->id();
            
            $table->string('CPC21code')->nullable();
            $table->string('CPC21title')->nullable();
            $table->string('العنوان')->nullable();
            $table->string('status')->nullable();


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
        Schema::dropIfExists('c_p_c_rev_2_1_translation');
    }
}
