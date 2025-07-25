<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsValuesSectionTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_value_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('values_section_id');
            $table->string('point_heading');
            $table->text('point_description');
            $table->integer('position')->default(0);
            $table->timestamps();

            $table->foreign('values_section_id')
                  ->references('id')
                  ->on('about_us_values_section')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_us_value_points');
    }
}
