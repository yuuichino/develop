<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest; 

class WorkController extends Controller
{
public function index(Work $work)
    {
       return view('works.index')->with(['works' => $work->getPaginateByLimit()]);
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function show(Work $work)
{
    return view('works.show')->with(['work' => $work]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create()
{
    return view('works.create');
}

    public function store(Work $work, WorkRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['work'];
        $work->fill($input)->save();
        return redirect('/works/' . $work->id);
    }
    
    //カリキュラム範囲外（打ち合わせの時に実装したやつ　あとでまた編集）
/*public function store(Request $request)
{
    dd($request);
    return view('posts.create');
}*/ 
    
    public function edit(Work $work)
{
    return view('works.edit')->with(['work' => $work]);
}

public function update(WorkRequest $request, Work $work)
{
    $input_work = $request['work'];
    $work->fill($input_work)->save();

    return redirect('/works/' . $work->id);
}

public function delete(Work $work)
{
    $work->delete();
    return redirect('/');
}
    //
}
