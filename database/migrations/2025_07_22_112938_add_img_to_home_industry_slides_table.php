<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgToHomeIndustrySlidesTable extends Migration
{
    public function up()
    {
        Schema::table('home_industry_slides', function (Blueprint $table) {
            $table->string('img')->nullable()->after('services');
        });
    }

    public function down()
    {
        Schema::table('home_industry_slides', function (Blueprint $table) {
            $table->dropColumn('img');
        });
    }
}
