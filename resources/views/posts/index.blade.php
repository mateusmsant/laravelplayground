@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    @forelse($posts as $key => $post)
        @include('posts.partials.post', [])
    @empty
    <div class="card m-2 text-primary font-weight-bold">
        <span class="p-2">No posts found</span>
    </div>
    @endforelse
    <div class="m-2 p-2 w-full text-left">
        <a href="posts/create"><button class="btn btn-primary text-white">Create a post</button></a>
    </div>
@endsection
