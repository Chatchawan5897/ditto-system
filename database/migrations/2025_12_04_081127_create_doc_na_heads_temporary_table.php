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
        Schema::create('doc_na_heads_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('file_import')->nullable();
            $table->bigInteger('owner_id')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('location_zone_id')->nullable();
            $table->bigInteger('building_branch_id')->nullable();
            $table->bigInteger('floor_area_room_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_na_heads_temporary');
    }
};
