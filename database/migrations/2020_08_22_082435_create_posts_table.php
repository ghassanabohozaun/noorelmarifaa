<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title_ar')->nullable();
            $table->string('post_title_en')->nullable();
            $table->text('post_summary_ar')->nullable();
            $table->text('post_summary_en')->nullable();
            $table->longText('post_details_ar')->nullable();
            $table->longText('post_details_en')->nullable();
            $table->enum('post_language', ['ar', 'en', 'ar_en'])->default('ar');
            $table->enum('post_status', ['enable', 'disable', 'pending'])->default('disable');
            $table->string('post_added_date')->nullable();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->foreignId('admins_id')->constrained('admins')->cascadeOnDelete();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
