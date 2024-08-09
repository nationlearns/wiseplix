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
        Schema::table('purchage_lead_details', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])->nullable()->default(null);
            $table->string('message')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchage_lead_details', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('message');
        });
    }
};
