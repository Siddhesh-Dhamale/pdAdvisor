<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIconToIndustriesTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('industries')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->string('icon')->nullable()->after('title');
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('industries')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->dropColumn('icon');
            });
        }
    }
}
