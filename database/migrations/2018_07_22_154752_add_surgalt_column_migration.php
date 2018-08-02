<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSurgaltColumnMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surgalt', function ($table) {
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')
                  ->references('id')->on('surgalt_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surgalt', function ($table) {
            $table->dropColumn('type_id');
        });
    }
}
