<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('heading');
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->text('map_url')->nullable();
            $table->string('form_heading');
            $table->string('facebook_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
