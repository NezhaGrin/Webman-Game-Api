<?php

namespace app\exception;

use Webman\Http\Request;
use Webman\Http\Response;
use support\validation\ValidationException as BaseValidationException;

class ValidationException extends BaseValidationException
{
    public function render(Request $request) : ?Response
    {
        return json(['code' => 10000, 'msg' => $this->getMessage()]);
    }
}