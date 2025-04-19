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
        Schema::create('traditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('festival_id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('festival_id')->references('id')->on('festivals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traditions');
    }
};
