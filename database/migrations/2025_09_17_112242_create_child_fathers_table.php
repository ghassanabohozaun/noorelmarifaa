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
        Schema::create('child_fathers', function (Blueprint $table) {
            $table->id();
            $table->string('father_full_name');
            $table->string('father_personal_id');
            $table->string('father_date_of_death');
            $table->enum('father_respon_of_death', ['illness ', 'martyr']);
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
        Schema::dropIfExists('child_fathers');
    }
};
