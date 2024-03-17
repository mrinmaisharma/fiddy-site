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
        Schema::table('fiddy_wardrobe_queries', function (Blueprint $table) {
            $table->renameColumn('shape','wardrobe_type');
            $table->string('finish_type')->nullable()->after('message');
            $table->string('material')->nullable()->after('finish_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fiddy_wardrobe_queries', function (Blueprint $table) {
            //
        });
    }
};
