@extends('layouts.app')

@section('title', $post['title'])

@section('content')

<div class="card m-2 text-primary font-weight-bold">
    <h1 class="m-2">{{ $post['title'] }}</h1>
    <p class="m-2">{{ $post['content'] }}</p>
</div>

@endsection
