<?php

namespace App\Modules\Asset\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \App\Models\Items\ItemLocation;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asset extends Model
{
    protected $table = 'items';   // <--- บอก Laravel ว่า model นี้ใช้ table items

    use HasFactory;
    // protected $table = 'view_item_all_v3'; // ตั้งชื่อของตารางที่ถูกต้อง
    protected $fillable = [
        "id",
        "parent_id",
        "item_type_id",
        "item_subtype_id",
        "price_before_vat",
        "assets_type_id",
        "vendor_id",
        "invoice_no",
        "posting_date",
        "asset_date",
        "code",
        "code_old",
        "code_sap",
        "code_old_sap",
        "name_en",
        "name_th",
        "is_group",
        "can_borrow",
        "brand_id",
        "model",
        "serial_no",
        "color",
        "size",
        "weight",
        "property_detail",
        "assets_status_id",
        "property_registration_id",
        // "created_assets_detail",
        "description",
        "description2",
        "description3",
        // "description4",
        "description5",
        "image_item_thumbnail",
        "image_item_asset_code",
        "image_item_img3",
        "image_item_img4",
        "image_item_img5",
        "warranty_type_id",
        "is_warranty_lifetime",
        "month_of_warranty",
        "warranty_start_date",
        "warranty_end_date",
        "warranty_detail",
        "status_id",
        "excel_id",
        "excel_path",
        "excel_date",
        "is_active",
        "created_by",
        "updated_by",
        "deleted_by",
        "created_at",
        "updated_at",
        "deleted_at",
        "owner_id",
        "document_no",
        "document_type",
        "book_value",
        'is_used_in_project',
        'project_id',
        'work_period',
        'project_branch_id',
        'is_general_project',
        'general_project_name',
        'project_year',
        'location_zone_id',
        'buliding_branch_id',
        'floor_area_room_id',
        'location_id',

    ];
}
