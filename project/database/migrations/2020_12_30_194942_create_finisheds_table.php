<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinishedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finisheds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('offerID');
            $table->integer('time_rate');
            $table->integer('quality_rate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finisheds');
    }
}
