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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title_one')->nullable();
            $table->text('description_one')->nullable();
            $table->string('image_one')->nullable();
            $table->string('title_two')->nullable();
            $table->text('description_two')->nullable();
            $table->string('image_two')->nullable();
            $table->string('title_card_main')->nullable();
            $table->string('title_card_one')->nullable();
            $table->text('description_card_one')->nullable();
            $table->string('title_card_two')->nullable();
            $table->text('description_card_two')->nullable();
            $table->string('title_card_three')->nullable();
            $table->text('description_card_three')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
