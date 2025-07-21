<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('hero_sections')) {
            Schema::create('hero_sections', function (Blueprint $table) {
                $table->id();
                $table->string('page_name');
                $table->string('banner_image')->nullable();
                $table->string('icon')->nullable();
                $table->string('icon_text')->nullable();
                $table->text('banner_content')->nullable();
                $table->string('button_text')->nullable();
                $table->string('button_url')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
