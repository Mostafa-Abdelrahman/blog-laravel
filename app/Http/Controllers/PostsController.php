<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index() {
        $allPosts = Post::all();
        // dd($allPosts);
        return view('posts.index',['posts'=>$allPosts]);
    }

    public function show($postId){
        $post=Post::find($postId);
        // dd($post);
        return view('posts.show',['post'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data=$_POST;
        return $data;
    }

    public function edit(){
        return view('posts.edit');
    }

    public function update($id){
        return view('posts.show',['post'=>$this->allPosts[$id]]);
    }

    public function destroy(){
        return "fuck";
    }
}
