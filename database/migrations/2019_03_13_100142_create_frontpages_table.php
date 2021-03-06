<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontpages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titleone');
            $table->string('bodyone');
            $table->string('titletwo');
            $table->string('bodytwo');
            $table->string('titlethree');
            $table->string('bodythree');
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
        Schema::dropIfExists('frontpages');
    }
}
