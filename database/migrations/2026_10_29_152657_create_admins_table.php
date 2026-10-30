<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use support\Db;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Db::schema()->create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名称');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->unsignedTinyInteger('is_active')->default(1)->comment('启用状态: 1-启用 0-禁用');
            $table->unsignedInteger('created_at')->comment('创建时间');
            $table->unsignedInteger('updated_at')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Db::schema()->dropIfExists('admins');
    }
};
