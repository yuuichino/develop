<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $category->get();//$postの中身を戻り値にする。
}    
    //
}
