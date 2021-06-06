<div class="form-group d-flex flex-column">
    <input class="form-control m-2" type="text" name="title" placeholder="Title" value="{{ old('title', optional($post ?? null)->title) }}" />
    @error('title')
        <p class="text-danger m-2 align-self-left">{{ $message }}</p>
    @enderror
    <textarea class="form-control m-2" type="textarea" name="content" placeholder="Content">{{ old('content', optional($post ?? null)->content) }}</textarea>
    @error('content')
        <p class="text-danger m-2">{{ $message }}</p>
    @enderror
