<?php
/**
 * Created By zachary
 * Time: 2017/1/14 下午7:10
 */

namespace App\Http\Controllers;


use App\Space;

class SpaceController extends BaseController
{

    public function get() {
        return Space::all();
    }

}