<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBodyColumnTypeInBlogs extends Migration
{
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->longText('body')->change();
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('body')->change();
        });
    }
}
