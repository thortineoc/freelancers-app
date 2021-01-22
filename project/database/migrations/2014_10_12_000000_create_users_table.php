<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('rate_time_sum')->default(0);
            $table->integer('rate_quality_sum')->default(0);
            $table->integer('number_of_rates')->nullable();
            $table->double('avg_rate_time')->storedAs('rate_time_sum / number_of_rates')->nullable();
            $table->double('avg_rate_quality')->storedAs('rate_quality_sum / number_of_rates')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
