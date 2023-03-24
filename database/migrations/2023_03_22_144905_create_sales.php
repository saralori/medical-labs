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
        // L'id fattura è nullable in quanto la fattura relativa a quella
        // determinata vendita può essere emessa successivamente
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->float('service_amount');
            $table->foreignId('service_point_id')->constrained();
            $table->foreignId('invoice_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
