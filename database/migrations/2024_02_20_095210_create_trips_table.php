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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained();
            $table->date('trip_date')->index();
            $table->string('trip_time')->index();

            $table->unsignedBigInteger('start_from');
            $table->foreign('start_from')->references('id')->on('locations')->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger('destination');
            $table->foreign('destination')->references('id')->on('locations')->cascadeOnUpdate()->restrictOnDelete();

            $table->tinyInteger('is_cancelled')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
