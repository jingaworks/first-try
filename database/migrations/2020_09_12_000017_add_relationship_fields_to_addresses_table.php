<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id', 'region_fk_2170489')->references('id')->on('regions');
            $table->unsignedInteger('place_id')->nullable();
            $table->foreign('place_id', 'place_fk_2170490')->references('id')->on('places');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2170494')->references('id')->on('users');
        });
    }
}