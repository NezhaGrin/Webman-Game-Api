<?php

use Webman\Route;

// 管理员路由组
Route::group('/admin', function ()
{
    // 创建管理员
    Route::post('/create', [app\controller\Admin\AdminController::class, 'create'])->name('admin.create');

    // 更新管理员
    Route::post('/update', [app\controller\Admin\AdminController::class, 'update'])->name('admin.update');

    // 删除管理员
    Route::post('/delete', [app\controller\Admin\AdminController::class, 'delete'])->name('admin.delete');
});