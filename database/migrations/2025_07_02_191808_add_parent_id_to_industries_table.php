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
        if (Schema::hasTable('industries') && !Schema::hasColumn('industries', 'parent_id')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->foreignId('parent_id')
                    ->nullable()
                    ->constrained('industries')
                    ->nullOnDelete();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('industries') && Schema::hasColumn('industries', 'parent_id')) {
            Schema::table('industries', function (Blueprint $table) {
                $table->dropForeign(['parent_id']);
                $table->dropColumn('parent_id');
            });
        }
    }
};
