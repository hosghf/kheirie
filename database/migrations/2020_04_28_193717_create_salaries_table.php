<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });
        \App\Models\Salary::create(
            [
                'id' => 1,
                'title' => 'کمتر از یک ملیون',
            ]
        );
        \App\Models\Salary::create(
            [
                'id' => 2,
                'title' => 'بین یک تا دو ملیون',
            ]
        );
        \App\Models\Salary::create(
            [
                'id' => 3,
                'title' => 'بین سه تا چهار ملیون',
            ]
        );
        \App\Models\Salary::create(
            [
                'id' => 4,
                'title' => 'بین چهار تا پنج ملیون',
            ]
        );
        \App\Models\Salary::create(
            [
                'id' => 5,
                'title' => 'بین پنج تا شش ملیون',
            ]
        );
        \App\Models\Salary::create(
            [
                'id' => 6,
                'title' => 'بیش از شش ملیون',
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
        Schema::dropIfExists('salaries');
    }
}
