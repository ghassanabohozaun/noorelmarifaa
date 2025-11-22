<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('details_ar')->nullable();
            $table->string('details_en')->nullable();
            $table->enum('language',['ar','en','ar_en','without_language'])->default('ar');
            $table->enum('status',['enable','disable'])->default('disable');
            $table->integer('order');
            $table->string('photo')->nullable();
            $table->enum('button_status', ['show', 'hide'])->default('hide');
            $table->string('link')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
