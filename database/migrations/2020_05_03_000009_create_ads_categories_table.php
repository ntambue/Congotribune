<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('ads_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
