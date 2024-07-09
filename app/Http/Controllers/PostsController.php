<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $allPosts=[
            ['id'=>1,'title'=>'php','posted_by'=>'mostafa','created_at'=>'2022-10-10 09:00:00'],
            ['id'=>2,'title'=>'c++','posted_by'=>'ahmed','created_at'=>'2022-12-10 07:00:00'],
            ['id'=>3,'title'=>'go','posted_by'=>'mohamed','created_at'=>'2023-05-10 04:00:00'],
            ['id'=>4,'title'=>'ptyhon','posted_by'=>'ibrahim','created_at'=>'2022-03-10 18:00:00'],
        ];
        return view('posts.index',['posts'=>$allPosts]);
    }

    public function show($postId){
        $allPosts=[
            ['id'=>1,'title'=>'php','posted_by'=>'mostafa','created_at'=>'2022-10-10 09:00:00'],
            ['id'=>2,'title'=>'c++','posted_by'=>'ahmed','created_at'=>'2022-12-10 07:00:00'],
            ['id'=>3,'title'=>'go','posted_by'=>'mohamed','created_at'=>'2023-05-10 04:00:00'],
            ['id'=>4,'title'=>'ptyhon','posted_by'=>'ibrahim','created_at'=>'2022-03-10 18:00:00'],
        ];
        return view('posts.show',['post'=>$allPosts[$postId]]);
    }

    public function create(){
        return view('posts.create');
    }
}
