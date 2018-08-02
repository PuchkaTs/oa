<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgaltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgalt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')
                  ->references('id')->on('grades')
                  ->onDelete('cascade');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')
                  ->references('id')->on('levels')
                  ->onDelete('cascade');
            $table->date('start_at');
            $table->date('end_at');
            $table->integer('days');
            $table->integer('seats');
            $table->string('time');
            $table->string('video');
            $table->string('image');
            $table->text('description');
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
        Schema::dropIfExists('surgalt');
    }
}
