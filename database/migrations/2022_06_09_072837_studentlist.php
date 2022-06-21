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
        Schema::create('studentlist', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Class')->nullable();
            $table->string('Section')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Gender')->nullable(); 
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
        //
    }
};
