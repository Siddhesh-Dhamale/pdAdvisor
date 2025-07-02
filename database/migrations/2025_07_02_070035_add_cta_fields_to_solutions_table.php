<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('solutions', function (Blueprint $table) {
            $table->string('cta_button_text')->nullable()->after('cta_title');
            $table->string('cta_button_link')->nullable()->after('cta_button_text');
        });
    }

    public function down()
    {
        Schema::table('solutions', function (Blueprint $table) {
            $table->dropColumn(['cta_button_text', 'cta_button_link']);
        });
    }
};
