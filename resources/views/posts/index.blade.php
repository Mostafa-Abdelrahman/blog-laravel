@extends('layouts.app')

@section('title')
    <title>Blog Laravel</title>
@endsection

@section('content')
        <div>
            <div class="d-grid gap-2 d-md-block" style="text-align: center ; margin:20px">
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Create Post</a>
            </div>
        </div>
        <table class="table" style="width: 70%; margin:auto;">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection
