<a href="/posts"class="btn">Go back</a>
<h1>{{$post->title}}</h1>
<h3>{{$post->content}}</h3>
<span>
    <form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Delete
    </button></form>
</span>
<span>
    <a href="/posts/{{$post->id}}/edit">Edit</a>
</span>
<br>
<small>writen on {{$post->created_at}}</small>