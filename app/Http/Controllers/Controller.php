<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * 测试
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function test(Request $request)
    {
        $data = $request->isMethod('POST');
        dump(config('app.locale', 1212));
        dump($data);
        json_encode([1,3],64);
    }
}
