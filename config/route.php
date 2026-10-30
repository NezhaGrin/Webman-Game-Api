<?php

use Webman\Route;

// 前端 API
Route::group('/api', function ()
{
    require base_path('routes/api.php');
});

// 后台 API
Route::group('/dWsNa', function ()
{
    require base_path('routes/admin.php');
});

// 关闭默认路由
Route::disableDefaultRoute();