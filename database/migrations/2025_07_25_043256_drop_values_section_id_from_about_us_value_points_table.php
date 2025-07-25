<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropValuesSectionIdFromAboutUsValuePointsTable extends Migration
{
    public function up()
    {
        Schema::table('about_us_value_points', function (Blueprint $table) {
            // Drop foreign key constraint first
            $table->dropForeign(['values_section_id']);

            // Drop the column
            $table->dropColumn('values_section_id');
        });
    }

    public function down()
    {
        Schema::table('about_us_value_points', function (Blueprint $table) {
            // Re-add the column
            $table->unsignedBigInteger('values_section_id')->nullable();

            // Re-add the foreign key constraint
            $table->foreign('values_section_id')
                  ->references('id')
                  ->on('about_us_values_section')
                  ->onDelete('cascade');
        });
    }
}
