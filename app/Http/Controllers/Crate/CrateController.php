<?php
namespace App\Http\Controllers\Crate;
use App\Http\Controllers\Controller;
use App\Model\WechatUser;
use App\Model\WechatChatModel;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CrateController extends Controller
{
    public function submit(){

        $data = [
            'title'=>'自定义菜单'
        ];

        return view('crate.crate',$data);
    }

    public function createmenuaction(Request $request){
        $data=$request->input();
        $info=[
            'button'=>$data
        ];
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.WechatUser::getAccessToken();
        echo $url;
        $client = new Client();
        $r = $client->request('POST', $url, [
            'body' => json_encode($info,JSON_UNESCAPED_UNICODE)
        ]);

        $response = json_decode($r->getBody(),true);
        print_r($response);
    }
}




