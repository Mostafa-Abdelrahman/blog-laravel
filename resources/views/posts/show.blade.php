@extends('layouts.app')
@section('title')
    <title>Edit Post</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
   {{-- @dd($post) --}}

    <div class="post-header">
        <h1 class="post-title">{{ $post['title'] }}</h1>
        <div class="post-meta">
            <img src="https://via.placeholder.com/50" alt="Author" class="author-image">
            <span class="author-name">@ {{ $post['author'] }}</span>
            <span class="post-date">{{ $post['updated_at'] }}</span>
        </div>
    </div>
    <div class="post-content">
       {{ $post['content'] }}
    </div>
    <div class="button-group">
        <a class="btn back-btn" href="{{ route('posts.index') }}">Back</a>
    </div>
@endsection
