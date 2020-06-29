<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('st_code_meli');
            $table->bigInteger('demand_code')->unique();
            $table->decimal('amount', 18);
            $table->tinyInteger('chek')->default(1);
            $table->string('tasvirkartCheck');
            $table->string('fishChkNum');
            $table->text('tozihat')->nullable();
            $table->tinyInteger('type')->default(1);
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
        Schema::dropIfExists('payments');
    }
}
