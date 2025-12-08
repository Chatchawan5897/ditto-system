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
        Schema::create('doc_xbra_lines_240731', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('xbra_head_doc_id')->nullable();
            $table->bigInteger('doc_bra_send_id');
            $table->bigInteger('item_id')->nullable();
            $table->date('borrow_date_start')->nullable();
            $table->date('borrow_date_end')->nullable();
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
        Schema::dropIfExists('doc_xbra_lines_240731');
    }
};
