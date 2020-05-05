<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
        \App\Models\Role::create(
            [
                'id' => 1,
                'title' => 'developer',
            ]
        );
        \App\Models\Role::create(
            [
                'id' => 2,
                'title' => 'admin',
            ]
        );
        \App\Models\Role::create(
            [
                'id' => 3,
                'title' => 'modir',
            ]
        );
        \App\Models\Role::create(
            [
                'id' => 4,
                'title' => 'student',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
