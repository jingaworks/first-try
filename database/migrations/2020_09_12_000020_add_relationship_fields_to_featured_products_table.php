<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFeaturedProductsTable extends Migration
{
    public function up()
    {
        Schema::table('featured_products', function (Blueprint $table) {
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_2170725')->references('id')->on('products');
            $table->unsignedInteger('profile_id')->nullable();
            $table->foreign('profile_id', 'profile_fk_2170726')->references('id')->on('profiles');
            $table->unsignedInteger('show_on_region_id')->nullable();
            $table->foreign('show_on_region_id', 'show_on_region_fk_2170727')->references('id')->on('regions');
            $table->unsignedInteger('show_on_place_id')->nullable();
            $table->foreign('show_on_place_id', 'show_on_place_fk_2170728')->references('id')->on('places');
            $table->unsignedInteger('show_on_category_id')->nullable();
            $table->foreign('show_on_category_id', 'show_on_category_fk_2170729')->references('id')->on('categories');
            $table->unsignedInteger('show_on_subcategory_id')->nullable();
            $table->foreign('show_on_subcategory_id', 'show_on_subcategory_fk_2170730')->references('id')->on('subcategories');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2170734')->references('id')->on('users');
        });
    }
}