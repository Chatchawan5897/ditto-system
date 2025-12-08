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
        Schema::create('item_import_excels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_path');
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('item_type_id');
            $table->bigInteger('item_subtype_id');
            $table->float('price_before_vat');
            $table->bigInteger('assets_type_id')->comment('เป็นทรัพย์สินทาง');
            $table->string('code')->nullable()->comment('รหัสทรัพย์สิน');
            $table->string('code_old')->nullable()->comment('รหัสทรัพย์สิน(เก่า)');
            $table->string('code_sap')->nullable()->comment('รหัสทรัพย์สินทางบัญชี(SAP)');
            $table->string('code_old_sap')->nullable()->comment('รหัสทรัพย์สินทางบัญชี(เก่า)');
            $table->string('name_en')->nullable();
            $table->string('name_th');
            $table->boolean('is_group');
            $table->boolean('can_borrow');
            $table->bigInteger('brand_id');
            $table->string('model');
            $table->string('serial_no');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('property_detail')->nullable()->comment('รายละเอียดทรัพย์สิน');
            $table->bigInteger('assets_status_id');
            $table->bigInteger('property_registration_id')->comment('การขึ้นทะเบียนทรัพย์สิน');
            $table->string('description')->nullable();
            $table->string('description2')->nullable();
            $table->string('description3')->nullable();
            $table->string('description4')->nullable();
            $table->string('description5')->nullable();
            $table->string('image_item_thumbnail')->nullable();
            $table->string('image_item_asset_code')->nullable();
            $table->string('image_item_img3')->nullable();
            $table->string('image_item_img4')->nullable();
            $table->string('image_item_img5')->nullable();
            $table->bigInteger('warranty_type_id');
            $table->boolean('is_warranty_lifetime')->nullable();
            $table->bigInteger('month_of_warranty')->nullable();
            $table->date('warranty_start_date')->nullable();
            $table->date('warranty_end_date')->nullable();
            $table->string('warranty_detail')->nullable();
            $table->bigInteger('status_id')->nullable();
            $table->boolean('is_active')->default(true)->comment('เปิดใช้งาน');
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_import_excels');
    }
};
