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
        Schema::create('scan_imgs', function (Blueprint $table) {
            $table->comment('เก็บรูปที่อยู่ในเอกสาร');
            $table->increments('id');
            $table->bigInteger('scan_id')->nullable();
            $table->string('image_item_img1')->nullable();
            $table->string('des_img1')->nullable();
            $table->string('image_item_img2')->nullable();
            $table->string('des_img2')->nullable();
            $table->string('image_item_img3')->nullable();
            $table->string('des_img3')->nullable();
            $table->string('image_item_img4')->nullable();
            $table->string('des_img4')->nullable();
            $table->string('image_item_img5')->nullable();
            $table->string('des_img5')->nullable();
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
        Schema::dropIfExists('scan_imgs');
    }
};
