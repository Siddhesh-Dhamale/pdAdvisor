<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeInsightsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('home_insights')) {
            Schema::create('home_insights', function (Blueprint $table) {
                $table->id();
                $table->string('insight_heading')->nullable();
                $table->string('subheading')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('home_insights')) {
            Schema::dropIfExists('home_insights');
        }
    }
}
