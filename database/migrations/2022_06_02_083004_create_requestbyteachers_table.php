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
        Schema::create('requestbyteachers', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Education')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Status')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('requestbyteachers');
    }
};
