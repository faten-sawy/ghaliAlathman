<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('merchant_name');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('store_name');
            $table->string('store_link');
            $table->integer('package_id');
            $table->string('image');
            $table->string('rate');
            $table->string('count_in_rate');
            $table->integer('star_rating');
            $table->boolean('status')->default(1)->nullable();
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
        Schema::dropIfExists('merchants');
    }
};
