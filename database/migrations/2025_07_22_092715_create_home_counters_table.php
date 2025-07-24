<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCountersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('home_counters')) {
            Schema::create('home_counters', function (Blueprint $table) {
                $table->id();
                $table->string('heading')->nullable();
                $table->unsignedBigInteger('count')->default(0);
                $table->string('count_title')->nullable();
                $table->string('symbol')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('home_counters')) {
            Schema::dropIfExists('home_counters');
        }
    }
}
