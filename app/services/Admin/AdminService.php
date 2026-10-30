<?php

namespace app\services\Admin;

use app\model\Admin;
use app\services\BaseService;

class AdminService extends BaseService
{
    /**
     * 创建管理员
     * 
     * @param array $data
     * 
     * @return void
     */
    public function create(array $data) : void
    {
        Admin::create($data);
    }
}