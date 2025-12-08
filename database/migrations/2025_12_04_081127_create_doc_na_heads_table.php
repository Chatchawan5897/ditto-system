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
        Schema::create('doc_na_heads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('file_import')->nullable();
            $table->bigInteger('owner_id')->nullable();
            $table->bigInteger('created_by')->nullable()->comment('สร้างโดย');
            $table->bigInteger('updated_by')->nullable()->comment('แก้ไขโดย');
            $table->bigInteger('deleted_by')->nullable()->comment('ลบโดย');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('location_zone_id')->nullable();
            $table->bigInteger('building_branch_id')->nullable();
            $table->bigInteger('floor_area_room_id')->nullable();
            $table->boolean('is_used_in_project')->nullable();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('work_period')->nullable();
            $table->bigInteger('project_branch_id')->nullable();
            $table->boolean('is_general_project')->nullable();
            $table->string('general_project_name')->nullable();
            $table->bigInteger('project_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_na_heads');
    }
};
