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
        Schema::table('fiddy_interior_queries', function (Blueprint $table) {
            $table->string('package')->nullable()->after('shared_estimate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fiddy_interior_queries', function (Blueprint $table) {
            //
        });
    }
};
