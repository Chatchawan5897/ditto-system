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
        Schema::create('user_orgs_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_main_id');
            $table->string('employee_main_code')->nullable();
            $table->bigInteger('employee_id');
            $table->string('employee_code')->nullable();
            $table->boolean('is_active')->default(true);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_orgs_temporary');
    }
};
