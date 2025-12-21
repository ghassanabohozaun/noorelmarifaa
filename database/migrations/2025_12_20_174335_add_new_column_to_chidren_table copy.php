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
            $table->string('school_name')->nullable()->after('class');
            $table->text('school_address')->nullable()->after('school_name');
            $table->string('school_tel')->nullable()->after('school_address');
            $table->string('school_type')->nullable()->after('school_tel');
            $table->boolean('pay_school_fees')->nullable()->default(0)->after('school_type');
            $table->decimal('fees_per_month', 8, 3)->nullable()->default(0)->after('pay_school_fees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            $table->dropColumn('school_name');
            $table->dropColumn('school_address');
            $table->dropColumn('school_tel');
            $table->dropColumn('school_type');
            $table->dropColumn('pay_school_fees');
            $table->dropColumn('fees_per_month');
        });
    }
};
