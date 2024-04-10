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
        Schema::create('visitorscruds', function (Blueprint $table) {
            $table->id();
            $table->string("NationalId");
            $table->string("Name");
            $table->string("Email");
            $table->string("Phone");
            $table->string("HostEmail");
            $table->string("HostPhone");
            $table->string("Address");
            $table->string("Departure")->default("inside");
            $table->string("Arrival");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitorscruds');
    }
};
