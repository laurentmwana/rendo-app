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
        Schema::create('hourlies', function (Blueprint $table) {
            $table->id();
            $table->string('day')->unique();
            $table->time('start')->nullable();
            $table->time('end')->nullable();
            $table->boolean('lock')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hourlies');
    }
};
