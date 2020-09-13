<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedProductsTable extends Migration
{
    public function up()
    {
        Schema::create('featured_products', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(0)->nullable();
            $table->integer('views')->nullable();
            $table->timestamps();
        });
    }
}