<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

use Encore\Admin\Layout\Content;

class MenusController extends Controller
{
    public function menus(Content $content){
        return $content
            ->header('Index')
            ->description('description')
            ->body(view('admin.menus.menus'));
    }

}