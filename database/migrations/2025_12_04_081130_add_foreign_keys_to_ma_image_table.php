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
        Schema::table('ma_image', function (Blueprint $table) {
            $table->foreign(['created_by'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['deleted_by'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['ma_item_id'])->references(['ma_item_id'])->on('ma_item')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['updated_by'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ma_image', function (Blueprint $table) {
            $table->dropForeign('ma_image_created_by_foreign');
            $table->dropForeign('ma_image_deleted_by_foreign');
            $table->dropForeign('ma_image_ma_item_id_foreign');
            $table->dropForeign('ma_image_updated_by_foreign');
        });
    }
};
