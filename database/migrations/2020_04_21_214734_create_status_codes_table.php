<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });


        \App\Models\Status_code::create(
            [
                'id' => 1,
                'title' => 'جدید',
            ]
        );
        \App\Models\Status_code::create(
            [
                'id' => 2,
                'title' => 'تایید مدیر',
            ]
        );
        \App\Models\Status_code::create(
            [
                'id' => 3,
                'title' => 'پرداخت',
            ]
        );
        \App\Models\Status_code::create(
            [
                'id' => 4,
                'title' => ' آرشیو ',
            ]
        );\App\Models\Status_code::create(
            [
                'id' => 5,
                'title' => 'ردشده',
            ]
        );
        \App\Models\Status_code::create(
            [
                'id' => 6,
                'title' => 'منقضی',
            ]
        );
        \App\Models\Status_code::create(
            [
                'id' => 7,
                'title' => 'بازدید مدیر',
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
        Schema::dropIfExists('status_codes');
    }
}
