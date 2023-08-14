<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;
use App\Http\Requests\WeightRequest;

class WeightController extends Controller
{
    public function index(Weight $weight)//インポートしたPostをインスタンス化して$postとして使用。
{
    return view('weights.index')->with(['weights' => $weight->getPaginateByLimit()]);
}

public function show(Weight $weight)
{
    return view('weights.show')->with(['weight' => $weight]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create()
{
    return view('weights.create');
}

    public function store(Weight $weight, WeightRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['weight'];
        $weight->fill($input)->save();
        return redirect('/weights/' . $weight->id);
    }
    
    //カリキュラム範囲外（打ち合わせの時に実装したやつ　あとでまた編集）
/*public function store(Request $request)
{
    dd($request);
    return view('posts.create');
}*/ 
    
    public function edit(Weight $weight)
{
    return view('weights.edit')->with(['weight' => $weight]);
}

public function update(WeightRequest $request, Weight $weight)
{
    $input_post = $request['weight'];
    $weight->fill($input_post)->save();

    return redirect('/weights/' . $weight->id);
}

public function delete(Weight $weight)
{
    $weight->delete();
    return redirect('/');
}
    //
}
