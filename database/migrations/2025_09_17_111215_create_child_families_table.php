<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('child_families', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_people_including_mother')->unsigned();
            $table->integer('male_number')->unsigned();
            $table->integer('female_number')->unsigned();
            $table->foreignId('child_id')->constrained('children')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_families');
    }
};
