<?php

namespace app\controller\Admin;

use support\Request;
use support\Response;
use DI\Attribute\Inject;
use app\controller\Controller;
use app\services\Admin\AdminService;
use app\validation\Admin\AdminRequest;
use support\validation\annotation\Validate;

class AdminController extends Controller
{
    /**
     * 管理员服务
     */
    #[Inject]
    private AdminService $adminService;

    /**
     * 创建管理员
     * 
     * @param Request $request
     * 
     * @return Response
     */
    #[Validate(validator: AdminRequest::class, scene: 'create')]
    public function create(Request $request) : Response
    {
        $this->adminService->create($request->only(['name', 'email', 'password', 'is_active']));

        return $this->successResponse();
    }

    /**
     * 更新管理员
     * 
     * @param Request $request
     * 
     * @return Response
     */
    #[Validate(validator: AdminRequest::class, scene: 'update')]
    public function update(Request $request) : Response
    {
        $this->adminService->update($request->only(['id', 'name', 'password', 'is_active']));

        return $this->successResponse();
    }

    /**
     * 删除管理员
     * 
     * @param Request $request
     * 
     * @return Response
     */
    #[Validate(validator: AdminRequest::class, scene: 'delete')]
    public function delete(Request $request) : Response
    {
        $this->adminService->delete($request->input('id'));

        return $this->successResponse();
    }
}
