<?php

namespace app\model;

use support\Model;

class AdminLoginLog extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 存储格式为 UNIX 时间戳（int）
     *
     * @var string
     */
    protected $dateFormat = 'U';
}
