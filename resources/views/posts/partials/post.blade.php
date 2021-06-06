<div class="card text-center m-2">
    <div>
        <h2 class="text-danger">{{ $post->title }}</h2>
    </div>

    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-danger m-2" />
    </form>
</div>
