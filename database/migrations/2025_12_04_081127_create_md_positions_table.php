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
        Schema::create('md_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->comment('รหัสสิทธิ์การใช้งาน');
            $table->string('name_th')->comment('ชื่อสิทธิ์การใช้งาน(ไทย)');
            $table->string('name_en')->nullable()->comment('ชื่อสิทธิ์การใช้งาน(อังกฤษ)');
            $table->boolean('is_active')->default(true)->comment('เปิดใช้งาน');
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_positions');
    }
};
