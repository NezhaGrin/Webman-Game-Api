<?php

namespace app\controller\Admin;

use support\Request;
use support\Response;
use app\controller\Controller;
use app\services\Admin\AdminService;
use app\validation\Admin\CreateRequest;
use support\validation\annotation\Validate;

class AdminController extends Controller
{
    /**
     * 构造方法
     * 
     * @param AdminService $adminService
     */
    public function __construct(private AdminService $adminService)
    {
    }

    /**
     * 创建管理员
     * 
     * @param CreateRequest $request
     * 
     * @return Response
     */
    #[Validate(validator: CreateRequest::class)]
    public function create(Request $request) : Response
    {
        $this->adminService->create($request->all());

        return $this->successResponse();
    }
}
