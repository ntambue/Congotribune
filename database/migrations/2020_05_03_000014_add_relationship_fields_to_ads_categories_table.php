<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdsCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('ads_categories', function (Blueprint $table) {
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id', 'categories_fk_1411608')->references('id')->on('categories');
        });

    }
}
