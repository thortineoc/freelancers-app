<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id('offerID');
            $table->timestamps();
            $table->timestamp('deadline');
            $table->double('price');
            $table->string('details');
            $table->integer('priority')->default(-1);;
            $table->boolean('accepted')->default(false);;
            $table->boolean('done')->default(false);;
            $table->integer('rate_time')->default(-1);;
            $table->integer('rate_quality')->default(-1);
            $table->foreignId('doerID');
            $table->foreignId('orderID');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
