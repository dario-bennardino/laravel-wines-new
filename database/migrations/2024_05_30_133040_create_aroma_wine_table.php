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
        Schema::create('aroma_wine', function (Blueprint $table) {
            $table->unsignedBigInteger('wine_id');
            $table->foreign('wine_id')
                ->references('id')
                ->on('wines')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('aroma_id');
            $table->foreign('aroma_id')
                ->references('id')
                ->on('aromas')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aroma_wine');
    }
};
