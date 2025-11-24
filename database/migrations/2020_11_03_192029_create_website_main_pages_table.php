<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteMainPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_main_pages', function (Blueprint $table) {
            $table->id();
            $table->string('counter_one');
            $table->string('counter_two');
            $table->string('counter_three');
            $table->string('counter_four');
            $table->string('upload_video');
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
        Schema::dropIfExists('website_main_pages');
    }
}
