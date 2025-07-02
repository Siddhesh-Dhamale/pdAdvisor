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
        Schema::create('industries_result_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('industry_id')->constrained()->onDelete('cascade');
            $table->string('card_image')->nullable();
            $table->string('card_heading');
            $table->text('card_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries_result_cards');
    }
};
