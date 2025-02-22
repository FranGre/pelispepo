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
        Schema::create('film_genders', function (Blueprint $table) {
            $table->foreignUuid('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreignUuid('gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->primary(['film_id', 'gender_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_genders');
    }
};
