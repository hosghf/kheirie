<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNesbateBaTalabeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nesbate_ba_talabe', function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });

        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 1,
                'title' => 'خود طلبه',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 2,
                'title' => 'پدر',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 3,
                'title' => 'همسر',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 4,
                'title' => 'برادر',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 5,
                'title' => 'مادر',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 6,
                'title' => 'خواهر',
            ]
        );
        \App\Models\nesbateBaTalabe::create(
            [
                'id' => 7,
                'title' => 'سایر',
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
        Schema::dropIfExists('nesbate_ba_talabe');
    }
}
