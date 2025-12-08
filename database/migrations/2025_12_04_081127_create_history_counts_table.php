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
        Schema::create('history_counts', function (Blueprint $table) {
            $table->comment('เก็บประวัติการแจ้งตั้งเริ่มโปรเซสจนจบ');
            $table->increments('id');
            $table->bigInteger('id_document_check_stock')->nullable();
            $table->string('pcs_status')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('history_counts');
    }
};
