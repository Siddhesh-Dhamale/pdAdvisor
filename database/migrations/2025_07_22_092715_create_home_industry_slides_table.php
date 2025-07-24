<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeIndustrySlidesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('home_industry_slides')) {
            Schema::create('home_industry_slides', function (Blueprint $table) {
                $table->id();
                $table->string('heading')->nullable();
                $table->string('subheading')->nullable();
                $table->string('question')->nullable();
                $table->text('services')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('home_industry_slides')) {
            Schema::dropIfExists('home_industry_slides');
        }
    }
}
