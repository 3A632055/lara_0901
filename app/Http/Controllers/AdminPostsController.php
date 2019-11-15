<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostsController extends Controller
{
    public function index()
    {
       // return view('admin.posts.index');
        $posts=Post::orderBy('created_at','DESC')->get();
        $data=['posts'=>$posts];
        return view('admin.posts.index',$data);

    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('admin.posts.edit', $data);
    }

    //單元練習< 練習4-4> 設定 AdminPostsController對應的 function
    //單元練習< 練習5-1> 將表單送過來的資料用 Model 寫入資料庫
    //單元練習< 練習5-2>  設定頁面跳轉
    public function store(Request$request)
    {
        Post::create($request->all());
        returnredirect()‐>route('admin.posts.index');
    }
}
