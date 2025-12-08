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
        Schema::create('md_floor_area_room_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('building_branch_id')->nullable();
            $table->string('code');
            $table->string('name_en');
            $table->string('name_th');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_floor_area_room_temporary');
    }
};
