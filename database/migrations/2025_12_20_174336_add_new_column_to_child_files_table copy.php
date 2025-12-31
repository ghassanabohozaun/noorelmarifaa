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
        Schema::table('child_files', function (Blueprint $table) {
            $table->string('child_activity_photo')->nullable()->after('guardian_personal_id_photo');
            $table->string('child_longitudinal_photo')->nullable()->after('child_activity_photo');
            $table->string('child_with_family_photo')->nullable()->after('child_longitudinal_photo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_files', function (Blueprint $table) {
            $table->dropColumn('child_activity_photo');
            $table->dropColumn('child_longitudinal_photo');
            $table->dropColumn('child_with_family_photo');
        });
    }
};
