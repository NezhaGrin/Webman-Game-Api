<?php

namespace app\controller\Admin;

use support\Request;
use support\Response;
use DI\Attribute\Inject;
use app\controller\Controller;
use app\services\Admin\AdminService;
use app\validation\Admin\CreateRequest;
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
    #[Validate(validator: CreateRequest::class)]
    public function create(Request $request) : Response
    {
        $this->adminService->create($request->only(['name', 'email', 'password', 'is_active']));

        return $this->successResponse();
    }
}
