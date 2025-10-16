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
        Schema::create('child_files', function (Blueprint $table) {
            $table->id();
            $table->string('picture_of_the_orphan_child')->nullable();
            $table->string('orphan_child_birth_certificate')->nullable();
            $table->string('father_death_certificate')->nullable();
            $table->string('guardian_personal_id_photo')->nullable();
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
        Schema::dropIfExists('child_files');
    }
};
