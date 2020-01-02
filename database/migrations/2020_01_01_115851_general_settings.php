<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('title',128);
            $table->longText('description');
            $table->longText('keywords');
            $table->string('logo',128);
            $table->string('header_image',128);
            $table->string('header_text',128);
            $table->string('google_maps_api_key',128);
            $table->string('about',255);
            $table->string('address',255);
            $table->string('contact_phone',10);
            $table->string('contact_mail',128);
            $table->string('copyright',255);
            $table->string('facebook',128);
            $table->string('twitter',128);
            $table->string('instagram',128);
            $table->string('linkedin',128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}
