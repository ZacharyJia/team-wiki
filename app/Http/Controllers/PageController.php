<?php
/**
 * Created By zachary
 * Time: 2017/1/14 下午5:16
 */

namespace App\Http\Controllers;


use App\Page;

class PageController extends BaseController
{
    public function create($space_id) {

    }

    public function delete($page_id) {

    }

    public function edit($page_id) {

    }

    public function get($page_id) {
        $page = Page::find($page_id);

    }

}