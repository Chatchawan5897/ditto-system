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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('users id');
            $table->string('employee_code')->unique()->comment('รหัสพนักงาน');
            $table->string('first_name')->comment('ชื่อต้น');
            $table->string('last_name')->comment('ชื่อสกุล');
            $table->string('phone_number')->nullable()->comment('เบอร์มือถือ');
            $table->string('profile_image_path')->nullable()->comment('ที่อยู่รูป');
            $table->string('email')->comment('อีเมล');
            $table->timestamp('email_verified_at')->nullable()->comment('ยืนยันอีเมลเมื่อ');
            $table->string('password')->comment('รหัสผ่าน');
            $table->bigInteger('role_id')->comment('บทบาท');
            $table->bigInteger('position_id')->comment('ตำแหน่ง');
            $table->bigInteger('department_id')->comment('ฝ่าย');
            $table->bigInteger('sub_department_id')->comment('แผนก');
            $table->boolean('is_active')->default(true)->comment('เปิดใช้งาน');
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
