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
        Schema::create('document_check_stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pcs_code')->nullable();
            $table->date('date_check_stock')->nullable()->comment('วันสำหรับลงการตรวจนับ');
            $table->string('remark')->nullable();
            $table->bigInteger('status_id')->nullable()->comment('MD_STATUSES');
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
        Schema::dropIfExists('document_check_stock');
    }
};
