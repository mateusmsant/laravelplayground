<div class="form-group d-flex flex-column">
    <input class="form-control my-2 type="text" name="title" placeholder="Title" value="{{ old('title', optional($post ?? null)->title) }}" />
    <textarea id="text" class="mb-2 form-control" type="textarea" name="content" placeholder="Content" spellcheck="false">{{ old('content', optional($post ?? null)->content) }}</textarea>
    @if(!empty($errors))
        <div class="mb-3">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<script>
    let observe;
    if (window.attachEvent) {
        observe = function (element, event, handler) {
            element.attachEvent(`on${event}`, handler);
        };
    }
    else {
        observe = function (element, event, handler) {
            element.addEventListener(event, handler, false);
        };
    }
    function init () {
        const text = document.getElementById('text');
        function resize () {
            text.style.height = 'auto';
            text.style.height = `${text.scrollHeight}px`;
        }
        /* 0-timeout to get the already changed text */
        function delayedResize () {
            window.setTimeout(resize, 0);
        }
        observe(text, 'change',  resize);
        observe(text, 'cut',     delayedResize);
        observe(text, 'paste',   delayedResize);
        observe(text, 'drop',    delayedResize);
        observe(text, 'keydown', delayedResize);
        resize();
    }
</script>
