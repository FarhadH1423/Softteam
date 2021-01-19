<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Latests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('details');
            $table->string('picture');
            $table->string('btnname');
            $table->string('btnurl');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
