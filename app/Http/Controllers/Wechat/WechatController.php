<?php
namespace App\Http\Controllers\Wechat;
use App\Http\Controllers\Controller;
use App\Model\WechatUser;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;

class WechatController extends Controller
{
    public function lable(){

        $url = 'https://api.weixin.qq.com/cgi-bin/tags/create?access_token='.WechatUser::getAccessToken();
        // echo $url;

        //$arr = json_decode(file_get_contents($url),true);
        // var_dump($arr);
        $client = new Client;
        $data = [
            'tag' => [
                'name' => 'aaaaaaa'
            ]
        ];
        $r = $client->request('POST',$url,[
            'body'=>json_encode($data,JSON_UNESCAPED_UNICODE)
        ]);
        $response_arr = json_decode($r->getBody(),true);
        var_dump($response_arr);

    }

}
?>