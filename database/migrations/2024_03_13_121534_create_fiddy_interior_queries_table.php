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
            $table->integer('bathrooms')->nullable();
            $table->integer('kitchens')->nullable();
            $table->integer('livings')->nullable();
            $table->integer('dinings')->nullable();
            $table->decimal('total_estimate',10,2)->nullable();
            $table->text('shared_estimate')->nullable();

            $table->json('bedroom_lengths')->nullable(); //removed
            $table->json('bedroom_breadths')->nullable(); //removed
            $table->json('bathroom_lengths')->nullable(); //removed
            $table->json('bathroom_breadths')->nullable(); //removed
            $table->json('kitchen_lengths')->nullable(); //removed
            $table->json('kitchen_breadths')->nullable(); //removed
            $table->json('living_lengths')->nullable(); //removed
            $table->json('living_breadths')->nullable(); //removed
            $table->json('dining_lengths')->nullable(); //removed
            $table->json('dining_breadths')->nullable(); //removed
            
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
