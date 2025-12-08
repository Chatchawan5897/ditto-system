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
        Schema::create('md_buliding_branch', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสของอาคาร/สาขา');
            $table->integer('location_zone_id')->nullable()->comment('เชื่อมโยงไปที่ `md_location_zone`');
            $table->string('code')->comment('รหัสอาคาร');
            $table->string('name_en');
            $table->string('name_th');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_buliding_branch');
    }
};
