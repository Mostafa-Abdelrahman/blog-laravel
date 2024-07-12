@extends('layouts.app')

@section('title')
    <title>Blog Laravel</title>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
                @foreach ($posts as $post)
                    {{-- <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit',$post['id']) }}" class="btn btn-primary">Edit</a>
                            <form style="display: inline;" action="{{ route('posts.destroy',$post['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr> --}}
                    <div class="post-header">
                        <h1 class="post-title">{{ $post['title'] }}</h1>
                        <div class="post-meta">
                            {{-- src="{{ $post['image'] }}" --}}
                            <img  src="https://via.placeholder.com/50" alt="Author" class="author-image"> 
                            <span class="author-name">@ {{ $post['author'] }}</span>
                            <span class="post-date">{{ $post['date'] }}</span>
                        </div>
                        <p class="post-description">
                            {{ $post['description'] }}
                        </p>
                        <div class="button-group">
                            <a href="{{route('posts.show',$post['id'])}}" class="btn show-btn">View</a>
                            <a href="{{ route('posts.edit',$post['id']) }}" class="btn edit-btn">Edit</a>
                            <form style="display: inline;" action="{{ route('posts.destroy',$post['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn delete-btn">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection
