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
        Schema::create('service_points', function (Blueprint $table) {
            $table->id();
            $table->float('service_point_price');
            $table->boolean('active_status')->default(0);
            $table->dateTime('status_change_datetime')->nullable();
            $table->foreignId('point_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_points');
    }
};
