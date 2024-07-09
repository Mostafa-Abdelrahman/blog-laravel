@extends('layouts.app')
@section('title')
    <title>Create Posts</title>
@endsection
@section('content')
    <form action="" style="margin: 30px">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea  rows="3" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post creator</label>
            <select name="" id="" class="form-control">
                <option value="1">mostafa</option>
                <option value="2">ahmed</option>
            </select>
        </div>
        <button class="btn-success btn">Submit</button>
    </form>
@endsection