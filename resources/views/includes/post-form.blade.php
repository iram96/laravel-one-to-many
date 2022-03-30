
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}} </li>
                @endforeach
            </ul>
        </div>
        
    @endif

</div>

@if ($post->exists)
    
<form action="{{ route('admin.posts.update', $post)}}" method="POST">
    @method('PUT')
    
@else
    
<form action="{{ route('admin.posts.store')}}" method="POST">
@endif

    @csrf
    <div class="container">
    
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Type here..." value="{{ old('title', $post->title)}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Post</label>
            <textarea class="form-control" id="content" rows="3" name="post_content" placeholder="Type here...">{{ old('post_content', $post->post_content)}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">URL Immagine</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Type here...">
        </div>
    
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
