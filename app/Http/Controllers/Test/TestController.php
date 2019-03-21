<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class TestController extends Controller
{
    public function aaa(){
        $url = 'http://passport.hz4155.cn/pass/reg';
        $ch =  curl_init($url);
        $rs = curl_exec($ch);
         echo $rs ;die;

    }
}