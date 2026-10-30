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
        Db::schema()->create('admin_login_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->comment('管理员ID');
            $table->string('device')->comment('设备');
            $table->string('os')->comment('系统');
            $table->string('browser')->comment('浏览器');
            $table->string('ip')->comment('IP地址');
            $table->string('country')->comment('国家');
            $table->string('city')->comment('地区');
            $table->unsignedInteger('created_at')->comment('登录时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Db::schema()->dropIfExists('admin_login_logs');
    }
};
