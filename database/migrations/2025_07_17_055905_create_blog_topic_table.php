<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('blog_topic')) {
            Schema::create('blog_topic', function (Blueprint $table) {
                $table->unsignedBigInteger('blog_id');
                $table->string('topic_name');
                $table->timestamps();

                // Optional: Add indexes for faster queries
                $table->index(['blog_id']);
                $table->index(['topic_name']);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('blog_topic');
    }
};
