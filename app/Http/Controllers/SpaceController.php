<?php
/**
 * Created By zachary
 * Time: 2017/1/14 下午7:10
 */

namespace App\Http\Controllers;


use App\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SpaceController extends BaseController
{
    public function show_new() {
        return view('new_space');
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:spaces|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('/new/space')
                ->withErrors($validator);
        }
        $name = $request->input('name');
        $space = new Space();
        $space['name'] = $name;
        $space['creator'] = $this->getLoginUser()->uid[0];
        $space->save();
        return redirect('/home');
    }

    public function get() {
        return Space::all();
    }

}