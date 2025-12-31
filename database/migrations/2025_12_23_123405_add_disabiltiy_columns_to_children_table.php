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
        Schema::table('children', function (Blueprint $table) {
            $table->boolean('with_disability')->nullable()->after('disease_clarification');
            $table->text('kind_of_disability')->nullable()->after('with_disability');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            $table->dropColumn('with_disability');
            $table->dropColumn('kind_of_disability');
        });
    }
};
