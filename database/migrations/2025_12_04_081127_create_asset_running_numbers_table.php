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
        Schema::create('asset_running_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->integer('last_number');
            $table->integer('year');
            $table->integer('digit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_running_numbers');
    }
};
