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
        Schema::table('sponsership_types', function (Blueprint $table) {
            $table->unsignedBigInteger('sponsership_organization_id')->nullable()->after('id');
            $table->foreign('sponsership_organization_id')->references('id')->on('sponsership_organizations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sponsership_types', function (Blueprint $table) {
            // Drop the foreign key
            $table->dropForeign(['sponsership_organization_id']); // Can also use the generated name: 'posts_user_id_foreign'

            // Drop the column
            $table->dropColumn('sponsership_organization_id');
        });
    }
};
