<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->string('hero_heading')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_image')->nullable();

            $table->string('subhero_heading')->nullable();
            $table->text('subhero_description1')->nullable();
            $table->text('subhero_description2')->nullable();
            $table->text('subhero_description3')->nullable();
            $table->text('subhero_description4')->nullable();

            $table->string('solution_cards_heading')->nullable();
            $table->string('counter_heading')->nullable();
            $table->string('result_cards_heading')->nullable();

            $table->string('cta_image')->nullable();
            $table->string('cta_title')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
