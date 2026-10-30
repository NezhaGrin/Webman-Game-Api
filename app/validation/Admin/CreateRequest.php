<?php
declare(strict_types=1);

namespace app\validation\Admin;

use support\validation\Validator;

class CreateRequest extends Validator
{
    protected array $rules = [
        'name'      => 'required|string|max:10',
        'email'     => 'required|email|max:50|unique:admins,email',
        'password'  => 'required|string|min:8|max:16',
        'is_active' => 'required|integer|in:0,1',
    ];

    protected array $messages = [
        'name.required'      => '请输入管理员名称',
        'name.string'        => '管理员名称必须是字符串',
        'name.max'           => '管理员名称不能超过10个字符',

        'email.required'     => '请输入邮箱',
        'email.email'        => '邮箱格式不正确',
        'email.max'          => '邮箱不能超过50个字符',
        'email.unique'       => '该邮箱已被使用',

        'password.required'  => '请输入密码',
        'password.string'    => '密码必须是字符串',
        'password.min'       => '密码不能少于8个字符',
        'password.max'       => '密码不能超过16个字符',

        'is_active.required' => '请选择启用状态',
        'is_active.integer'  => '启用状态必须是整数',
        'is_active.in'       => '启用状态只能为启用或禁用',
    ];

    protected array $scenes = [
        'update' => ['name', 'email', 'is_active']
    ];
}
