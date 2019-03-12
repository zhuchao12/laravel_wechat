<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/wechat',WechatController::class);
    $router->resource('/sendMsg',SendMsgController::class);
    $router->get('/wechat/view/sendmsg','SendMsgController@sendmsgview');
    $router->post('/wechat/action/sendmsga','SendMsgController@sendmsga');
    $router->get('/wechat/view/custom','SendMsgController@custom');

    $router->post('/wechat/action/carte','SendMsgController@carte');

    $router->get('/wechat/view/menus','MenusController@menus');


});
