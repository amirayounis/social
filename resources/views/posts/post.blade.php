@extends("template")
@section("main")
<div class="post">
    <h1>{{$post["title"]}}</h1>
    <p>{{$post["body"]}}</p>
    <form action="{{route("posts.remove",['id'=>$post['id']])}}" method="post">
    @method("DELETE")
    @csrf
     <button>delete</button>
    </form>
    <a href="{{route("posts.edit",["post"=>$post])}}">edit</a>
 </div>
<form action="{{route("comments.store")}}" method="post">
    @csrf
    <input type="text" name="post_id" value="{{$post['id']}}" hidden>
    <input type="text" name="body" placeholder="comment">
    <input type="submit" value="comment">
</form>
{{-- {{dd($post->comments)}} --}}
@foreach ( $post->comments as $comment)
<div class="post">
    <p>{{$comment["body"]}}</p>

 </div>
@endforeach
@endsection
