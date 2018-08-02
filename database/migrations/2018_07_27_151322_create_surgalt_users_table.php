<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgaltUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgalt_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surgalt_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('surgalt_id')->references('id')->on('surgalt')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surgalt_user');
    }
}
