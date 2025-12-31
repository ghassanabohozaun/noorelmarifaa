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
        Schema::table('child_guardians', function (Blueprint $table) {
            $table->string('guardian_first_name')->nullable()->after('guardian_full_name');
            $table->string('guardian_middle_name')->nullable()->after('guardian_first_name');
            $table->string('guardian_surname_name')->nullable()->after('guardian_middle_name');
            $table->string('guardian_work')->nullable()->after('guardian_surname_name');
            $table->text('guardian_address')->nullable()->after('guardian_work');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_guardians', function (Blueprint $table) {
            $table->dropColumn('guardian_first_name');
            $table->dropColumn('guardian_middle_name');
            $table->dropColumn('guardian_surname_name');
            $table->dropColumn('guardian_work');
            $table->dropColumn('guardian_address');
        });
    }
};
