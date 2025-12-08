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
        Schema::create('doc_rea_receive_lines_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rea_head_doc_id')->nullable();
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
            $table->enum('is_approved', ['0', '1', '2'])->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_rea_receive_lines_temporary');
    }
};
