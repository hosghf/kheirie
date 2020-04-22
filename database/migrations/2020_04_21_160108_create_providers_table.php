<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('code_meli')->unique();
            $table->string('status_code');
            $table->tinyInteger('under_sponsorship');
            $table->string('job');
            $table->string('explanation');
            $table->tinyInteger('salary_code');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('mobile');
            $table->string('work_address');
            $table->string('work_phone');
            $table->string('work_postal_code');
            $table->bigInteger('student_id');
            $table->timestamps();
        });
        Schema::table('providers', function (Blueprint $table){
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
