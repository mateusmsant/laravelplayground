<div class="card text-center m-2 border-primary">
    <div>
        <a href="/posts/{{$post->id}}" class="text-decoration-none"><h2 class="text-primary font-weight-bold">{{ $post->title }}</h2></a>
    </div>
    <div class="d-flex flex-row align-items-center justify-content-center">
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger m-2" />
        </form>
        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-success text-white">Update</button></a>
    </div>
</div>
