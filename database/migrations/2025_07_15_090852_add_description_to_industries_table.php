<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionToIndustriesTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('industries')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->text('description')->nullable()->after('icon'); // after icon for grouping
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('industries')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }
    }
}
