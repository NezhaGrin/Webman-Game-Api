<?php

namespace app\services\Admin;

use app\model\Admin;
use app\services\BaseService;
use support\Db;

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

    /**
     * 更新管理员
     * 
     * @param array $data
     * 
     * @return void
     */
    public function update(array $data) : void
    {
        $adminModel = Admin::find($data['id']);

        if (!$adminModel)
        {
            $this->serviceException('管理员不存在');
        }

        $adminModel->update($data);
    }

    /**
     * 删除管理员
     * 
     * @param int $id
     * 
     * @return void
     */
    public function delete(int $id) : void
    {
        Admin::destroy($id);
    }
}