<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parking_spaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('title');
            $table->string('street');
            $table->integer('number');
            $table->string('city');
            $table->string('picture');
            $table->string('description');
            $table->foreignId('yearly_fees_id')
                ->references('id')
                ->on('yearly_fees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('dailyTariff');
            $table->foreignId('additional_information_id')
                ->references('id')
                ->on('additional_information')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_spaces');
    }
};
