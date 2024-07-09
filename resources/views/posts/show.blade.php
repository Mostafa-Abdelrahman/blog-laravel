@extends('layouts.app')
@section('title')
    <title>Edit Post</title>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        Post Info
        </div>
        <div class="card-body">
        <h5 class="card-title">Name: {{ $post['posted_by'] }}</h5>
        <p class="card-text">title: {{ $post['title'] }}</p>
        <p class="card-text">Email: {{ $post['posted_by'] }}@gmail.com</p>
        <p class="card-text">create At : {{ $post['created_at'] }}</p>
        </div>
    </div>
@endsection
        


