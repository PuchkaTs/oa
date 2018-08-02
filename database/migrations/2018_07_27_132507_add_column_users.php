<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('lastName')->nullable();
            $table->string('registerId')->nullable();
            $table->string('phone')->nullable();
            $table->string('school')->nullable();
            $table->string('grade')->nullable();
            $table->string('district')->nullable();
            $table->string('parentName')->nullable();
            $table->string('parentPhone')->nullable();
            $table->string('parentMail')->nullable();
            $table->boolean('confirmed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn(['lastName', 'registerId', 'phone', 'school', 'grade', 'district', 'parentName', 'parentPhone', 'parentMail', 'confirmed']);
        });
    }
}
