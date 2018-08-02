<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalbarSurgaltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salbar_surgalt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salbar_id')->unsigned();
            $table->integer('surgalt_id')->unsigned();

            $table->foreign('salbar_id')->references('id')->on('salbar')->onDelete('cascade');
            $table->foreign('surgalt_id')->references('id')->on('surgalt')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salbar_surgalt');
    }
}
