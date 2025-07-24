<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCtasTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('home_ctas')) {
            Schema::create('home_ctas', function (Blueprint $table) {
                $table->id();
                $table->string('img')->nullable();
                $table->string('heading')->nullable();
                $table->string('button_text')->nullable();
                $table->string('button_link')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('home_ctas')) {
            Schema::dropIfExists('home_ctas');
        }
    }
}
