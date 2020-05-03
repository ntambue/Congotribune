<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id', 'categories_fk_1411548')->references('id')->on('categories');
            $table->unsignedInteger('author_id');
            $table->foreign('author_id', 'author_fk_1411552')->references('id')->on('users');
        });

    }
}
