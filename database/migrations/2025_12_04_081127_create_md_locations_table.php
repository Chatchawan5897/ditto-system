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
        Schema::create('md_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name_en');
            $table->string('name_th');
            $table->boolean('is_active')->default(true)->comment('เปิดใช้งาน');
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name_old')->nullable();
            $table->integer('location_zone_id')->nullable()->comment('รหัสโซนจาก `md_location_zone`');
            $table->integer('building_branch_id')->nullable()->comment('รหัสอาคารจาก `md_buliding_branch`');
            $table->integer('floor_area_room_id')->nullable()->comment('รหัสห้องจาก `md_floor_area_room`');
            $table->string('full_location')->nullable()->comment('ข้อมูลทั้งหมดของสถานที่ (เช่น "โรงงานชลบุรี อาคารหลัก ชั้น 1-ห้อง 1 Show Room")');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_locations');
    }
};
