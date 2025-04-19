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
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('festival_date');
            $table->unsignedBigInteger('town_id')->nullable(); // optional
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('festivals');
    }
};
