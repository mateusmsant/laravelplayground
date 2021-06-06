@extends('layouts.app')

@section('title', $post['title'])

@section('content')
<div class="m-2 p-2 w-full text-left">
    <a href="/posts"><button class="btn btn-outline text-white">Posts</button></a>
</div>
<div class="card m-2 text-primary font-weight-bold d-flex flex-row justify-content-between border-primary">
    <div>
        <h1 class="m-2">{{ $post['title'] }}</h1>
        <p class="m-2">{{ $post['content'] }}</p>
    </div>
    <div class="d-flex flex-row justify-content-center align-items-center m-2">
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger m-2" />
        </form>
        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-success text-white">Update</button></a>
    </div>
</div>

@endsection

