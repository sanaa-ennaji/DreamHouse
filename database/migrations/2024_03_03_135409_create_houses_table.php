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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->enum('status', ['sale', 'rent']);
            $table->string('city');
            $table->string('address');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('price');
            $table->string('size')->nullable();
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
