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
        Schema::create('child_guardians', function (Blueprint $table) {
            $table->id();
            $table->string('guardian_full_name');
            $table->string('guardian_personal_id');
            $table->date('guardian_birthday');
            $table->enum('why_not_the_mother_is_guardian', ['divorced ', 'abandoned', 'sick', 'etc']);
            $table->string('guardian_relationship_with_the_child');
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
        Schema::dropIfExists('child_guardians');
    }
};
