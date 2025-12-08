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
        Schema::create('check_asset', function (Blueprint $table) {
            $table->comment('รายการของอุปกรณ์ที่อยู่ในเอกสารตรวจนับ');
            $table->bigIncrements('id');
            $table->bigInteger('document_check_stock_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->string('name_th')->nullable();
            $table->bigInteger('item_type_id')->nullable();
            $table->string('serial_no')->nullable();
            $table->bigInteger('location_id')->nullable();
            $table->string('location_name_th')->nullable();
            $table->string('owner_code')->nullable();
            $table->string('owner_first_name')->nullable();
            $table->string('owner_last_name')->nullable();
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_asset');
    }
};
