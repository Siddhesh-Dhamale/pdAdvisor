<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsApproachSectionTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_approach_section', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('heading');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_us_approach_section');
    }
}
