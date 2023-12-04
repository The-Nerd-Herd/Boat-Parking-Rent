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
        Schema::create('special_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parking_space_id')
                ->references('id')
                ->on('parking_spaces')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('text');
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_requirements');
    }
};
