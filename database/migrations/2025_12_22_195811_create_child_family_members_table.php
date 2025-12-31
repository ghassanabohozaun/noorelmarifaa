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
        Schema::create('child_family_members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name')->nullable();
            $table->string('member_age')->nullable();
            $table->string('member_relation')->nullable();
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
        Schema::dropIfExists('child_family_members');
    }
};
