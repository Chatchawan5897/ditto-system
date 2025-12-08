<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('route')->nullable();
            $table->string('icon')->nullable();

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('sub_parent_id')->nullable();

            $table->integer('order_index')->default(1);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            // ถ้าต้องการ Reference Menu ตัวเอง
            // สามารถเปิดใช้งานได้ ถ้าตารางเมนูต้องใช้ FK จริงๆ
            // ตอนนี้ผม comment ไว้ เพราะอาจทำให้ migrate fresh ล้ม
            //
            // $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
            // $table->foreign('sub_parent_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
