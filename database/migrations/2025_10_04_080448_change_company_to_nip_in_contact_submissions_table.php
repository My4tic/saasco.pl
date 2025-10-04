<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            // Drop phone column
            $table->dropColumn('phone');

            // Rename company to nip
            $table->renameColumn('company', 'nip');
        });

        // Make nip and budget NOT NULL (in separate statement after rename)
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('nip')->nullable(false)->change();
            $table->string('budget')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            // Make columns nullable again
            $table->string('nip')->nullable()->change();
            $table->string('budget')->nullable()->change();
        });

        Schema::table('contact_submissions', function (Blueprint $table) {
            // Rename nip back to company
            $table->renameColumn('nip', 'company');

            // Add phone column back
            $table->string('phone')->nullable()->after('nip');
        });
    }
};
