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
        Schema::create('ma_item', function (Blueprint $table) {
            $table->increments('ma_item_id');
            $table->string('ma_head_no', 50);
            $table->integer('ma_asset_item_id');
            $table->string('ma_current_status', 20);
            $table->string('trouble_details', 500);
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
        Schema::dropIfExists('ma_item');
    }
};
