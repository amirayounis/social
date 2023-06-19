@extends("template")
@section("main")
<form action="{{route("posts.update",["post"=>$post])}}" method="post">
    @method("PUT")
    @csrf
    title:<input type="text" value="{{$post['title']}}" name="title" id="">
    <br> <br>
<textarea name="body" id="" cols="30" rows="5">
    {{$post["body"]}}
</textarea>
<input type="submit" value="post">
</form>

@endsection
