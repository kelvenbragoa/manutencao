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
        Schema::create('equipment_movements', function (Blueprint $table) {
            $table->id();


            $table->foreignId('equipment_id')->constrained()->onDelete('cascade');
            $table->foreignId('requested_by_user_id')->constrained('users');

            $table->timestamp('entry_time')->nullable();
            $table->foreignId('entry_by_user_id')->nullable()->constrained('users');

            $table->timestamp('approved_at')->nullable();
            $table->foreignId('approved_by_user_id')->nullable()->constrained('users');

            $table->timestamp('in_maintenance_at')->nullable();
            $table->foreignId('in_maintenance_by_user_id')->nullable()->constrained('users');

            $table->timestamp('inspection_at')->nullable();
            $table->foreignId('inspection_done_by_user_id')->nullable()->constrained('users');

            $table->timestamp('maintenance_done_at')->nullable();
            $table->foreignId('maintenance_done_by_user_id')->nullable()->constrained('users');

            $table->timestamp('exit_requested_at')->nullable();
            $table->foreignId('exit_requested_by_user_id')->nullable()->constrained('users');

            $table->timestamp('authorized_exit_at')->nullable();
            $table->foreignId('authorized_exit_by_user_id')->nullable()->constrained('users');

            $table->timestamp('exit_time')->nullable();
            $table->foreignId('exit_by_user_id')->nullable()->constrained('users');

            $table->foreignId('equipment_movement_status_id')->default(1)->constrained('equipment_movement_statuses');

            $table->text('observation')->nullable();

            $table->foreignId('created_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('deleted_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_movements');
    }
};
