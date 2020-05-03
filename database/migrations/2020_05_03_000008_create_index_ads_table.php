<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexAdsTable extends Migration
{
    public function up()
    {
        Schema::create('index_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('code_a_728_x_90')->nullable();
            $table->longText('code_b_728_x_90')->nullable();
            $table->longText('code_c_728_x_90')->nullable();
            $table->string('code_d_728_x_90')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
