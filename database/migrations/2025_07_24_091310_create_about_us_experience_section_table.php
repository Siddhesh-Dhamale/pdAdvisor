<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsExperienceSectionTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_experience_section', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->string('heading');
            $table->text('description_1');
            $table->text('description_2')->nullable();
            $table->string('image_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_us_experience_section');
    }
}
