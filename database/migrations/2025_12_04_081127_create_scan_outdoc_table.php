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
        Schema::create('scan_outdoc', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('item_id')->nullable();
            $table->bigInteger('doc_id')->nullable();
            $table->string('asset_code')->nullable();
            $table->bigInteger('count_status_id')->nullable();
            $table->string('other_status')->nullable();
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
        Schema::dropIfExists('scan_outdoc');
    }
};
