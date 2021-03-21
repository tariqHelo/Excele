<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCPC21AndISICRevAndHS2017Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_p_c2_1_and__i_s_i_c__rev_and__h_s_2017', function (Blueprint $table) {
            $table->id();
            $table->string('HS2017')->nullable();
            $table->string('HSpartial')->nullable();
            $table->longText('Description')->nullable();
            $table->string('CPCVer.2.1')->nullable();
            $table->string('CPCpartial')->nullable();
            $table->string('CPC21title')->nullable();
            $table->string('ISIC4code')->nullable();
            $table->string('ISIC4partial')->nullable();
            $table->longText('Desc')->nullable();
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
        Schema::dropIfExists('c_p_c2_1_and__i_s_i_c__rev_and__h_s_2017');
    }
}
