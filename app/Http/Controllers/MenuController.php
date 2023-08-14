<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest; // useする

class MenuController extends Controller
{
    public function index(Menu $menu)//インポートしたPostをインスタンス化して$postとして使用。
{
    return view('menus.index')->with(['menus' => $menu->getPaginateByLimit()]);//$postの中身を戻り値にする。
}

public function show(Menu $menu)
{
    return view('menus.show')->with(['menu' => $menu]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create()
{
    return view('menus.create');
}

    public function store(Menu $menu, MenuRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['menu'];
        $menu->fill($input)->save();
        return redirect('/menus/' . $menu->id);
    }
    
    //カリキュラム範囲外（打ち合わせの時に実装したやつ　あとでまた編集）
/*public function store(Request $request)
{
    dd($request);
    return view('posts.create');
}*/ 
    
    public function edit(Menu $menu)
{
    return view('menus.edit')->with(['menu' => $menu]);
}

public function update(MenuRequest $request, Menu $menu)
{
    $input_menu = $request['menu'];
    $menu->fill($input_menu)->save();

    return redirect('/menus/' . $menu->id);
}

public function delete(Menu $menu)
{
    $menu->delete();
    return redirect('/');
}
    //
}
