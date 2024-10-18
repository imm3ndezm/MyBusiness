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
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('banner')->nullable();
            $table->string('description')->nullable();
            $table->string('name');
            $table->string('nickname')->unique();
            $table->string('owner_id')->unique();
            $table->string('email')->unique();
            $table->string('description');
            $table->string('location');
            $table->string('phone');
            $table->string('url')->nullable();
            $table->string('tags')->nullable(); 
            $table->enum('status', ['Active', 'Pending', 'Inactive', 'Suspended', 'Deleted', 'Archived'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};
