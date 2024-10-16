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
            $table->string('business_photo')->nullable();
            $table->string('business_description')->nullable();
            $table->string('business_name');
            $table->string('business_nickname')->unique();
            $table->string('business_owner_id')->unique();
            $table->string('business_email')->unique();
            $table->string('business_description');
            $table->string('business_location');
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
