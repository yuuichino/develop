<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(Work $work)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $work->get();//$postの中身を戻り値にする。
}
    //
}
