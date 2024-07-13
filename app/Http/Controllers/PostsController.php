<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index() {
        $allPosts = Post::where('archive',0)->get();
        // dd($allPosts);
        return view('posts.index',['posts'=>$allPosts]);
    }

    public function show($postId){
        $post=Post::findOrFail($postId);
        // dd($post);
        return view('posts.show',['post'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data=$_POST;
        $post=new Post;
        // dd($data['title']);
        $post->title= $data['title'];
        $post->author= $data['author'];
        $post->description= $data['description'];
        $post->content= $data['content'];
        $post->save();
        return to_route('posts.index');
    }

    public function edit($postId){
        $post=Post::findOrFail($postId);
        return view('posts.edit',['post'=>$post]);
    }

    public function update($postId){
        $post=Post::findOrFail($postId);
        $data=$_POST;
        $post->title=($data['title']!==""? $data['title'] :$post->title);
        $post->author=($data['author']!==""? $data['author'] :$post->author);
        $post->description=($data['description']!==""? $data['description'] :$post->description);
        $post->content=($data['content']!==""? $data['content'] :$post->content);
        $post->save();
        return view('posts.show',['post'=>$post]);
    }

    public function delete($postId){
    $post=Post::findOrFail($postId);
    $post->archive=1;
    $post->save();
    return to_route('posts.index');
    }
    public function restore($postId){   
        $post=Post::findOrFail($postId);
        $post->archive=0;
        $post->save();
    return to_route('posts.archive');
    }

    public function archive(){
        $posts=Post::where('archive',1)->get();
        return view('posts.archive',['posts'=>$posts]);
    }

    public function destroy($postId){
        $post=Post::findOrFail($postId);
        $post->delete();
        return to_route('posts.archive');
    }

}
