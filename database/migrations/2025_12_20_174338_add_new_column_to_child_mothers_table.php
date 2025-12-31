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
        Schema::table('child_mothers', function (Blueprint $table) {
            $table->string('mother_first_name')->nullable()->after('mother_full_name');
            $table->string('mother_middle_name')->nullable()->after('mother_first_name');
            $table->string('mother_surname_name')->nullable()->after('mother_middle_name');
            $table->string('mother_work')->nullable()->after('mother_surname_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_mothers', function (Blueprint $table) {
            $table->dropColumn('mother_first_name');
            $table->dropColumn('mother_middle_name');
            $table->dropColumn('mother_surname_name');
            $table->dropColumn('mother_work');
        });
    }
};
