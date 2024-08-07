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
        Schema::create('fiddy_kitchen_queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('message')->nullable();
            $table->string('shape')->nullable();
            $table->decimal('a_length',10,2)->nullable();
            $table->decimal('a_breadth',10,2)->nullable();
            $table->decimal('a_height',10,2)->nullable();
            $table->decimal('b_length',10,2)->nullable();
            $table->decimal('b_breadth',10,2)->nullable();
            $table->decimal('b_height',10,2)->nullable();
            $table->decimal('c_length',10,2)->nullable();
            $table->decimal('c_breadth',10,2)->nullable();
            $table->decimal('c_height',10,2)->nullable();
            $table->decimal('total_estimate',10,2)->nullable();
            $table->text('shared_estimate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiddy_kitchen_queries');
    }
};
