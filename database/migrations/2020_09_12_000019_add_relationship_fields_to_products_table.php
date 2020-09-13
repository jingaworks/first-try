<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('address_id')->nullable();
            $table->foreign('address_id', 'address_fk_2170577')->references('id')->on('addresses');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2170581')->references('id')->on('users');
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_2170595')->references('id')->on('categories');
            $table->unsignedInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id', 'subcategory_fk_2170596')->references('id')->on('subcategories');
        });
    }
}