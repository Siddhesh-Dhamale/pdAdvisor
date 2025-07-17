<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('industry_related')) {
            Schema::create('industry_related', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('industry_id');
                $table->unsignedBigInteger('related_industry_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industry_related');
    }
};
