<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //列表
    public function index(){
        //从数据库查询数据
        $posts = Post::orderBy('created_at','desc')->paginate(6);
    	return view('post/index', compact('posts'));
    }

    //创建文章
    public function create()
    {
        return view('post/create');
    }

    //创建逻辑
    public function store(){
        $post = Post::create(request(['title', 'content']));
        //创建文章成功，返回列表页
        return redirect('/posts');
    }

    //详情页
    public function show(\App\Post $post)
    {
        return view('post/show', compact('post'));
    }



    //编辑页面
    public function edit(){
    	return view('post/edit');
    }

    //编辑逻辑
    public function update(){
    	return view('post/update');
    }

    //删除逻辑
    public function delete(){
    	return view('post/delete');
    }




}
