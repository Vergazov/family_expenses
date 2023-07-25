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
        Schema::table('expens', function (Blueprint $table) {
            $table->string('whose_expenses')->nullable()->after('sum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expens', function (Blueprint $table) {
            $table->dropColumn('whose_expenses');
        });
    }
};
