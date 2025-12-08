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
        Schema::create('ma_head', function (Blueprint $table) {
            $table->increments('ma_head_id');
            $table->string('ma_head_no', 50);
            $table->timestamp('ma_head_date');
            $table->string('ma_head_status', 20);
            $table->integer('ma_informant');
            $table->string('phoneNumber', 20);
            $table->string('remark', 500)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ma_head');
    }
};
