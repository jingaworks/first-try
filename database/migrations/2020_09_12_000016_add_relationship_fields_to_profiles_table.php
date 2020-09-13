<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id', 'region_fk_2170466')->references('id')->on('regions');
            $table->unsignedInteger('place_id')->nullable();
            $table->foreign('place_id', 'place_fk_2170467')->references('id')->on('places');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2170486')->references('id')->on('users');
            $table->unsignedInteger('address_id')->nullable();
            $table->foreign('address_id', 'address_fk_2170495')->references('id')->on('addresses');
        });
    }
}