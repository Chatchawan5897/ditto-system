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
        Schema::create('doc_tfl_heads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->bigInteger('owner_id');
            $table->bigInteger('location_id');
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
        Schema::dropIfExists('doc_tfl_heads');
    }
};
