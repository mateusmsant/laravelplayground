@extends('layouts.app')

@section('title', 'Create new post')
@section('content')
<div>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.partials.form')
            <input type="submit" value="Create post" class="btn btn-primary w-50 align-self-center"/>
        </div>
    </form>
</div>
@endsection
