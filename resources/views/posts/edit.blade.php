@extends('layouts.app')

@section('title')
    <title>Edit Post</title>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection
@section('content')

<div class="form-container">
    <h1>Update Exist Blog Post</h1>
    <form action="{{ route('posts.update',1) }}"  method="post" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="form-group">
            <button type="submit" class="btn submit-btn">Update</button>
        </div>
    </form>
</div>

@endsection