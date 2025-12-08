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
        Schema::create('md_locations_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name_en');
            $table->string('name_th');
            $table->boolean('is_active')->default(true);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name_old')->nullable();
            $table->integer('location_zone_id')->nullable();
            $table->integer('building_branch_id')->nullable();
            $table->integer('floor_area_room_id')->nullable();
            $table->string('full_location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_locations_temporary');
    }
};
