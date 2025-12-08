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
        Schema::create('items_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('item_type_id')->nullable();
            $table->string('item_type_name')->nullable();
            $table->bigInteger('item_subtype_id')->nullable();
            $table->string('item_subtype_name')->nullable();
            $table->float('price_before_vat')->nullable();
            $table->bigInteger('assets_type_id')->nullable();
            $table->string('assets_type_name')->nullable();
            $table->string('code')->nullable();
            $table->string('code_old')->nullable();
            $table->string('code_sap')->nullable();
            $table->string('code_old_sap')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_th')->nullable();
            $table->string('is_group')->nullable();
            $table->string('can_borrow')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('property_detail')->nullable();
            $table->bigInteger('assets_status_id')->nullable();
            $table->string('assets_status_code')->nullable();
            $table->string('assets_status_name')->nullable();
            $table->bigInteger('property_registration_id')->nullable();
            $table->string('property_registration_code')->nullable();
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
            $table->bigInteger('vendor_id')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('posting_date')->nullable();
            $table->date('asset_date')->nullable();
            $table->bigInteger('warranty_type_id')->nullable();
            $table->boolean('is_warranty_lifetime')->nullable();
            $table->string('month_of_warranty')->nullable();
            $table->date('warranty_start_date')->nullable();
            $table->date('warranty_end_date')->nullable();
            $table->string('warranty_detail')->nullable();
            $table->bigInteger('status_id')->nullable();
            $table->bigInteger('excel_id')->nullable();
            $table->string('excel_path')->nullable();
            $table->date('excel_date')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('owner_id')->nullable();
            $table->string('owner_code')->nullable();
            $table->string('document_no')->nullable();
            $table->string('document_type')->nullable();
            $table->bigInteger('location_id')->nullable();
            $table->string('location_code')->nullable();
            $table->bigInteger('book_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_temporary');
    }
};
