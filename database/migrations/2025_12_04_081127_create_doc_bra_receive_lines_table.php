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
        Schema::create('doc_bra_receive_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bra_head_doc_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->string('img_serial')->nullable();
            $table->string('img_item')->nullable();
            $table->string('img_other')->nullable();
            $table->string('img_other2')->nullable();
            $table->string('img_other3')->nullable();
            $table->boolean('is_active')->nullable();
            $table->text('reject_remark')->nullable();
            $table->text('force_remark')->nullable();
            $table->date('force_at')->nullable();
            $table->enum('is_approved', ['0', '1', '2'])->nullable()->comment('0=ไม่อนุมัติ, 1=อนุมัติ, 2=อนุมัติแบบมีเงื่อนไข');
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
        Schema::dropIfExists('doc_bra_receive_lines');
    }
};
