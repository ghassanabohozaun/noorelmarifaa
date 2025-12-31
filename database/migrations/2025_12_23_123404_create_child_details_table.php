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
        Schema::create('child_details', function (Blueprint $table) {
            $table->id();
            $table->text('health_problem')->nullable();
            $table->text('economic_situation')->nullable();
            $table->text('child_progress')->nullable();
            $table->text('expenses')->nullable();
            $table->text('sponsorship_funds_cover')->nullable();
            $table->foreignId('child_id')->nullable()->constrained('children')->cascadeOnDelete();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_details');
    }
};
