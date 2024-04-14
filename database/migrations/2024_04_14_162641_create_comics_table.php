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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price', 8)->nullable();
            $table->string('series', 150)->nullable();
            $table->date('sale_date', 50)->nullable();
            $table->string('type', 150)->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
