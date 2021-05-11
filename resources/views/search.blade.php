<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div class="post-list">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif