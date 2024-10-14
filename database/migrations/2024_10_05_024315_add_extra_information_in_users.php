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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('profile_photo')->nullable();
            $table->enum('role', ['user', 'entrepreneur', 'admin', 'superadmin'])->default('user');
            $table->enum('status', ['Active', 'Pending', 'Inactive', 'Suspended', 'Blocked', 'Deleted', 'Archived'])->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('profile_photo');
            $table->dropColumn('role');
            $table->dropColumn('status');
        });
    }
};
