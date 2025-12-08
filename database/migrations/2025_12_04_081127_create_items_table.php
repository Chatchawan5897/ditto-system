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
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->bigInteger('vendor_id');
            $table->string('invoice_no')->nullable();
            $table->date('posting_date')->nullable();
            $table->date('asset_date')->nullable();
            $table->bigInteger('warranty_type_id');
            $table->boolean('is_warranty_lifetime')->nullable();
            $table->bigInteger('month_of_warranty')->nullable();
            $table->date('warranty_start_date')->nullable();
            $table->date('warranty_end_date')->nullable();
            $table->string('warranty_detail')->nullable();
            $table->bigInteger('status_id')->nullable();
            $table->bigInteger('excel_id')->nullable();
            $table->string('excel_path')->nullable();
            $table->date('excel_date')->nullable();
            $table->boolean('is_active')->default(true)->comment('เปิดใช้งาน');
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('owner_id')->nullable();
            $table->string('document_no')->nullable();
            $table->string('document_type')->nullable();
            $table->bigInteger('book_value')->nullable();
            $table->boolean('is_used_in_project')->nullable();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('work_period')->nullable();
            $table->bigInteger('project_branch_id')->nullable();
            $table->boolean('is_general_project')->nullable();
            $table->string('general_project_name')->nullable();
            $table->bigInteger('project_year')->nullable();
            $table->string('status_upload', 50)->nullable();
            $table->integer('location_zone_id')->nullable();
            $table->integer('buliding_branch_id')->nullable();
            $table->integer('floor_area_room_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->date('document_date')->nullable();
            $table->text('return_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
