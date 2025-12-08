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
        Schema::create('users_temporary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_code')->unique('users_employee_code__temporary_unique');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('profile_image_path')->nullable();
            $table->string('email')->unique('users_email_temporary_unique');
            $table->string('email_import')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('role_id');
            $table->string('role_name')->nullable();
            $table->bigInteger('position_id');
            $table->string('position_name')->nullable();
            $table->bigInteger('department_id');
            $table->string('department_name')->nullable();
            $table->bigInteger('sub_department_id');
            $table->string('sub_department_name')->nullable();
            $table->boolean('is_active')->default(true);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_temporary');
    }
};
