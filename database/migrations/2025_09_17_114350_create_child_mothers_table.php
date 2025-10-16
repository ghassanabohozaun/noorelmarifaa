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
        Schema::create('child_mothers', function (Blueprint $table) {
            $table->id();
            $table->string('mother_full_name');
            $table->string('mother_personal_id');
            $table->boolean('is_mother_alive')->default(0);
            $table->string('mother_date_of_death');
            $table->boolean('is_mother_the_guardian')->default(0);
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
        Schema::dropIfExists('child_mothers');
    }
};
