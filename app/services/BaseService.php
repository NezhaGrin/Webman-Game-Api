<?php

namespace app\services;

use support\exception\BusinessException;

abstract class BaseService
{
    /**
     * 抛出服务异常
     * 
     * @param string $msg
     * @param int $code
     * 
     * @return never
     */
    protected function serviceException(string $msg, int $code = 10000) : never
    {
        throw new BusinessException($msg, $code);
    }
}