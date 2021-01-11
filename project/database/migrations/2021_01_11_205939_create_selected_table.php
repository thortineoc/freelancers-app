<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected', function (Blueprint $table) {
            $table->id();
            $table->boolean('finished')->default(false);
            $table->boolean('rejected')->default(false);
            $table->integer('rate_time');
            $table->integer('rate_quality');
            $table->foreignId('accepted_id');
            $table->foreign('accepted_id')->references('id')->on('accepted');
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
        Schema::dropIfExists('selected');
    }
}
