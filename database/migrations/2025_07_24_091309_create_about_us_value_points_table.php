<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsValuePointsTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_values_section', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('heading');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_us_values_section');
    }
}
