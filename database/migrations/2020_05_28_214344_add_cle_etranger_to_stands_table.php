<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCleEtrangerToStandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stands', function (Blueprint $table) {
            $table->unsignedBigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes');


            $table->unsignedBigInteger('espace_exposant_id');
            $table->foreign('espace_exposant_id')->references('id')->on('espace_exposants');


            $table->unsignedBigInteger('exposant_id');
            $table->foreign('exposant_id')->references('id')->on('exposants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stands', function (Blueprint $table) {
            $table->dropColumn(['theme_id','espace_id','exposant_id']);
        });
    }
}
