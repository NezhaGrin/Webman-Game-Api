<?php

namespace app\model;

use support\Model;

class Admin extends Model
{
    /**
     * 存储格式为 UNIX 时间戳（int）
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 可批量赋值的属性
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
    ];
}
