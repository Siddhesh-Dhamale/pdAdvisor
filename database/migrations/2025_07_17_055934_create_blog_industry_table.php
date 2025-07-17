<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('blog_industry')) {
            Schema::create('blog_industry', function (Blueprint $table) {
                $table->unsignedBigInteger('blog_id');
                $table->string('industry_title');
                $table->timestamps();

                // Optional: Add indexes to optimize queries
                $table->index(['blog_id']);
                $table->index(['industry_title']);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('blog_industry');
    }
};
