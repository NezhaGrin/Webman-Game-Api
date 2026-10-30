<?php

namespace app\exception;

use Throwable;
use Webman\Http\Request;
use Webman\Http\Response;
use Next\VarDumper\Dumper;
use support\exception\Handler;
use Next\VarDumper\DumperHandler;

class ExceptionHandler extends Handler
{
    use DumperHandler;

    public function render(Request $request, Throwable $exception) : Response
    {
        if ($exception instanceof Dumper)
        {
            return response(self::convertToHtml($exception));
        }

        return parent::render($request, $exception);
    }
}