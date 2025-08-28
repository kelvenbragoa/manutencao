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
        Schema::table('equipment_movements', function (Blueprint $table) {
            //
            $table->timestamp('inspection_at')->nullable();
            $table->foreignId('inspection_done_by_user_id')->nullable()->constrained('users');

            $table->timestamp('authorized_exit_at')->nullable();
            $table->foreignId('authorized_exit_by_user_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipment_movements', function (Blueprint $table) {
            //
        });
    }
};
