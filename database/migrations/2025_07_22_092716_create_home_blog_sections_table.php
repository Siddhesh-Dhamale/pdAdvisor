<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeBlogSectionsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('home_blog_sections')) {
            Schema::create('home_blog_sections', function (Blueprint $table) {
                $table->id();
                $table->string('heading')->nullable();
                $table->string('subheading')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('home_blog_sections')) {
            Schema::dropIfExists('home_blog_sections');
        }
    }
}
