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
            $table->removeColumn('bedroom_lengths');
            $table->removeColumn('bedroom_breadths');
            $table->removeColumn('kitchen_lengths');
            $table->removeColumn('kitchen_breadths');
            $table->removeColumn('living_lengths');
            $table->removeColumn('living_breadths');
            $table->removeColumn('dining_lengths');
            $table->removeColumn('dining_breadths');
            $table->removeColumn('bathroom_lengths');
            $table->removeColumn('bathroom_breadths');
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
