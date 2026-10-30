<?php

namespace app\controller;

use support\Response;

abstract class Controller
{
    /**
     * 成功响应 HTTP JSON 200 响应
     *
     * @param ?string $msg
     * @param array $data
     * 
     * @return Response
     */
    protected function successResponse(?string $msg = null, array $data = []) : Response
    {
        return json(['msg' => $msg ?? trans('成功'), 'code' => 0, 'data' => $data]);
    }

    /**
     * 错误响应 HTTP JSON 200 响应
     *
     * @param string $msg
     * @param int $code
     * 
     * @return Response
     */
    protected function errorResponse(string $msg = '', int $code = 10000) : Response
    {
        return json(['msg' => $msg, 'code' => $code]);
    }
}