<form method="post" action="/posts/{{$post->id}}">
    @csrf
    @method('PUT')
    <div class="form-group" enctype='multipart/form-data'>
      <label>title</label>
      <input type="text" name="title" 
      value={{$post->title}} class="form-control p_input">
    </div>
    <div>
      <textarea name="content" placeholder="Content..." > {{$post->content}}</textarea>
    </div>
      
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-block enter-btn">Post</button>
    </div>
    
  </form>
  @if ($errors->any())
    <div class = "w-4/5 m-auto">
        <ul>
          @foreach ($errors->all() as $error)
              <li>
                {{$error}}
              </li>
          @endforeach
        </ul>
  
    </div>
      
  @endif