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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('father_name');
            $table->string('grand_father_name');
            $table->string('family_name');
            $table->string('password');
            $table->string('personal_id')->nullable()->unique();
            $table->date('birthday')->nullable();
            $table->enum('classification', ['fatherless', 'parentless'])->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->integer('class')->nullable();
            $table->enum('health_status', ['good', 'sick'])->nullable();
            $table->longText('disease_clarification')->nullable();
            $table->string('authorized_contact_number')->nullable();
            $table->string('backup_contact_number')->nullable();
            $table->string('whatsApp_number')->nullable();
            $table->foreignId('governoate_id')->nullable()->constrained('governorates')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->cascadeOnDelete();
            $table->foreignId('sponsership_status_id')->nullable()->constrained('sponsership_statuses')->cascadeOnDelete();
            $table->foreignId('sponsership_organization_id')->nullable()->constrained('sponsership_organizations')->cascadeOnDelete();
            $table->foreignId('sponsership_type_id')->nullable()->constrained('sponsership_types')->cascadeOnDelete();
            $table->longText('address_details')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('freeze')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
