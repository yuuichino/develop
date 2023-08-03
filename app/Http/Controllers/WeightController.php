<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function index(Weight $weight)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $weight->get();//$postの中身を戻り値にする。
}
    //
}
