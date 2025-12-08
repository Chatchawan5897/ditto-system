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
        Schema::create('doc_rea_send_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rea_head_doc_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->string('img_serial')->nullable();
            $table->string('img_item')->nullable();
            $table->string('img_other')->nullable();
            $table->string('img_other2')->nullable();
            $table->string('img_other3')->nullable();
            $table->text('remark')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_approved')->nullable();
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
        Schema::dropIfExists('doc_rea_send_lines');
    }
};
