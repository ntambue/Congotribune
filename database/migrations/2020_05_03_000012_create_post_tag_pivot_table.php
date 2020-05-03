<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_1411551')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_1411551')->references('id')->on('tags')->onDelete('cascade');
        });

    }
}
