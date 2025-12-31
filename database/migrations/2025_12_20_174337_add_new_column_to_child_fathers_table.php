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
        Schema::table('child_fathers', function (Blueprint $table) {
            $table->string('father_first_name')->nullable()->after('father_full_name');
            $table->string('father_middle_name')->nullable()->after('father_first_name');
            $table->string('father_surname_name')->nullable()->after('father_middle_name');
            $table->string('father_work')->nullable()->after('father_surname_name');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_fathers', function (Blueprint $table) {
            $table->dropColumn('father_first_name');
            $table->dropColumn('father_middle_name');
            $table->dropColumn('father_surname_name');
            $table->dropColumn('father_work');
        });
    }
};
