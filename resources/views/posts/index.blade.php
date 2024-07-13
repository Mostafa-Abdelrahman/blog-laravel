@extends('layouts.app')

@section('title')
    <title>Blog Laravel</title>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
                @foreach ($posts as $post)
                {{-- @dd($post); --}}
                    <div class="post-header">
                        <h1 class="post-title">{{ $post['title'] }}</h1>
                        <div class="post-meta">
                            {{-- src="{{ $post['image'] }}" --}}
                            <img  src="https://via.placeholder.com/50" alt="Author" class="author-image"> 
                            <span class="author-name">@ {{ $post['author'] }}</span>
                            <span class="post-date">{{ $post->updated_at->toFormattedDateString();}}</span>
                        </div>
                        <p class="post-description">
                            {{ $post['description'] }}
                        </p>
                        <div class="button-group">
                            <a href="{{route('posts.show',$post['id'])}}" class="btn show-btn">View</a>
                            <a href="{{ route('posts.edit',$post['id']) }}" class="btn edit-btn">Edit</a>
                            <form style="display: inline;" action="{{ route('posts.delete',$post['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <button type="submit" class="btn delete-btn" onclick=" return confirm('Are you sure you want to delete ?'); ">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection
