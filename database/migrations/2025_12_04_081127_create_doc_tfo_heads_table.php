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
        Schema::create('doc_tfo_heads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->bigInteger('owner_from_id');
            $table->bigInteger('owner_to_id');
            $table->bigInteger('location_id')->nullable();
            $table->string('other_location')->nullable();
            $table->string('used_to');
            $table->text('remark')->nullable();
            $table->integer('versioning')->default(0);
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->softDeletes();
            $table->timestamps();
            $table->integer('location_zone_id')->nullable();
            $table->integer('buliding_branch_id')->nullable();
            $table->integer('floor_area_room_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_tfo_heads');
    }
};
