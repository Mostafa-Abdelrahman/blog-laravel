@extends('layouts.app')
@section('title')
    <title>Create Posts</title>
@endsection


@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection
@section('content')
    {{-- <form action="{{ route('posts.store') }}" method="POST" style="margin: 30px">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea name="description" rows="3" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post creator</label>
            <select name="posted_by" id="" class="form-control">
                <option value="mostafa">mostafa</option>
                <option value="ahmed">ahmed</option>
            </select>
        </div>
        <button class="btn-success btn">Submit</button>
    </form> --}}

  
    <div class="form-container">
        <h1>Create a New Blog Post</h1>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div> --}}
            <div class="form-group">
                <button type="submit" class="btn submit-btn">Submit</button>
            </div>
            <div class="button-group">
                <a class="btn back-btn" href="{{ route('posts.index') }}">Back</a>
            </div>
        </form>
    </div>
@endsection