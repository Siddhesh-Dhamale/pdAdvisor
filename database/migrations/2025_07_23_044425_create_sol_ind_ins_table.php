<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolIndInsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('sol_ind_ins')) {
            Schema::create('sol_ind_ins', function (Blueprint $table) {
                $table->id();
                $table->string('page_name');
                $table->string('section_title')->nullable();
                $table->string('heading');
                $table->text('description');
                $table->string('cta_img')->nullable();
                $table->string('cta_heading_1')->nullable();
                $table->string('cta_heading_2')->nullable();
                $table->string('cta_btn_text')->nullable();
                $table->string('cta_btn_link')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('sol_ind_ins');
    }
}
