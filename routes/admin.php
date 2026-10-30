<?php

use Webman\Route;

// 管理员路由组
Route::group('/admin', function ()
{
    // 创建管理员
    Route::post('/create', [app\controller\Admin\AdminController::class, 'create'])->name('admin.create');
});