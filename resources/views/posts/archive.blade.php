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
                            <span class="post-date">{{ $post['updated_at'] }}</span>
                        </div>
                        <p class="post-description">
                            {{ $post['description'] }}
                        </p>
                        <div class="button-group">
                            <form style="display: inline;" action="{{ route('posts.restore',$post['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <button type="submit" class="btn show-btn">Restore</button>
                            </form>
                            <form style="display: inline;" action="{{ route('posts.destroy',$post['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn delete-btn">Destroy</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection
