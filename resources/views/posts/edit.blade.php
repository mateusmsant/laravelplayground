@extends('layouts.app')

@section('title', 'Update a post')
@section('content')
<form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('PUT')
    @include('posts.partials.form')
        <input type="submit" value="Update" class="btn btn-primary"/>
    </div>
</form>
@endsection
