<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; // useする

class PostController extends Controller
{
    public function index(Post $post)
    {
       return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function show(Post $post)
{
    return view('posts.show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create()
{
    return view('posts.create');
}

    public function store(Post $post, PostRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    //カリキュラム範囲外（打ち合わせの時に実装したやつ　あとでまた編集）
/*public function store(Request $request)
{
    dd($request);
    return view('posts.create');
}*/ 
    
    public function edit(Post $post)
{
    return view('posts.edit')->with(['post' => $post]);
}

public function update(PostRequest $request, Post $post)
{
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
}

public function delete(Post $post)
{
    $post->delete();
    return redirect('/');
}

    //
}
