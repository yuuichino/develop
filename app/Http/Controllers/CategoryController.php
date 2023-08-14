<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
       return view('categories.index')->with(['categories' => $category->getPaginateByLimit()]);
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function show(Category $category)
{
    return view('categories.show')->with(['category' => $category]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create()
{
    return view('categories.create');
}

    public function store(Category $category, CategoryRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/categories/' . $category->id);
    }
    
    //カリキュラム範囲外（打ち合わせの時に実装したやつ　あとでまた編集）
/*public function store(Request $request)
{
    dd($request);
    return view('posts.create');
}*/ 
    
    public function edit(Category $category)
{
    return view('categories.edit')->with(['category' => $category]);
}

public function update(CategoryRequest $request, Category $category)
{
    $input_category = $request['category'];
    $category->fill($input_category)->save();

    return redirect('/categories/' . $category->id);
}

public function delete(Category $category)
{
    $category->delete();
    return redirect('/');
} 
    //
}
