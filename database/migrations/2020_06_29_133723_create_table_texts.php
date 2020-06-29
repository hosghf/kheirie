<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->timestamps();
        });

        \App\Models\Text::create(
            [
                'id' => 1,
                'title' => 'عنوان صفحه ورود راست',
                'text' => 'سامانه ثبت نام کمک های معیشیتی مدارس حوزه علمیه خواهران شیراز'
            ]
        );
        \App\Models\Text::create(
            [
                'id' => 2,
                'title' => 'عنوان چپ',
                'text' => 'عطر گل یاس'
            ]
        );
        \App\Models\Text::create(
            [
                'id' => 3,
                'title' => 'متن چپ',
                'text' => 'سامانه بسته معیشتی خانواده های حوزه های علمیه خواهران شیراز'
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
        Schema::dropIfExists('texts');
    }
}
