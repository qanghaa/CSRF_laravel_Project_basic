<h1>Posts</h1>
@if(count($posts)>0)
    @foreach ($posts as $post)
        <div>
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>writen on {{$post->create_at}}</small>
        </div>
       
    @endforeach
@else
    <h3>No posts found</h3>
@endif