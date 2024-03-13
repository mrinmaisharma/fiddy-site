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
        Schema::create('fiddy_interior_queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('message')->nullable();
            $table->string('type')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->json('bedroom_lengths')->nullable();
            $table->json('bedroom_breadths')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->json('bathroom_lengths')->nullable();
            $table->json('bathroom_breadths')->nullable();
            $table->integer('kitchens')->nullable();
            $table->json('kitchen_lengths')->nullable();
            $table->json('kitchen_breadths')->nullable();
            $table->integer('livings')->nullable();
            $table->json('living_lengths')->nullable();
            $table->json('living_breadths')->nullable();
            $table->integer('dinings')->nullable();
            $table->json('dining_lengths')->nullable();
            $table->json('dining_breadths')->nullable();
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
        Schema::dropIfExists('fiddy_interior_queries');
    }
};
