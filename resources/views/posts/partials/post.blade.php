@if($loop->even)
    <div>
        <h2>{{ $post->title }}</h2>
    </div>
@else
    <div style="background-color: silver">
        <h2>{{ $post->title }}</h2>
    </div>
@endif

<div>
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-primary" />
    </form>
</div>
