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
        Schema::create('item_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('item_id');
            $table->bigInteger('location_id')->nullable();
            $table->bigInteger('doc_head_id')->nullable();
            $table->string('doc_head_type')->nullable();
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_locations');
    }
};
