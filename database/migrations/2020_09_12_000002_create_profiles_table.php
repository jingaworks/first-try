<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('phone')->unique();
            $table->float('credit', 15, 2)->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->timestamps();
        });
    }
}