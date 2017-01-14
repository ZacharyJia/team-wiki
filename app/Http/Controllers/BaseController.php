<?php
/**
 * Created By zachary
 * Time: 2017/1/14 下午5:23
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{

    public function getLoginUser() {
        $user = Session::get('user');
        return $user;
    }

}