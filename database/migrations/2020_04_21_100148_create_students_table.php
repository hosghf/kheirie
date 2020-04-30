<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code_talabegi')->unique();
            $table->string('code_meli')->unique();
            $table->string('name');
            $table->string('family');
            $table->string('father_name');
            $table->string('mobile');
            $table->bigInteger('school_id')->unsigned();
            $table->tinyInteger('status_code');
            $table->timestamps();
        });

        Schema::table('students', function (Blueprint $table){
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
