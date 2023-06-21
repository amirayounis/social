@extends("template")
@section("main")
<h1>posts</h1>
@auth
{{Auth::user()->name}}
@endauth

<a href="{{route("posts.create")}}">addpost</a>
@foreach ($posts as $post)
  <div class="post">
   <h1>{{$post["title"]}} ,written by:{{$post->user->name}}</h1>
   <p>{{$post["body"]}}</p>
   @if (isset($post['img']))
   <img src="/storage/imgs/{{$post["img"]}}" width="100px" >
   @endif
   <form action="{{route("posts.remove",['id'=>$post['id']])}}" method="post">
   @method("DELETE")
   @csrf
    <button>delete</button>
   </form>
   <a href="{{route("posts.edit",["post"=>$post])}}">edit</a>
   <a href="{{route("posts.show",["post"=>$post])}}">details</a>
</div>
   @endforeach
@endsection

