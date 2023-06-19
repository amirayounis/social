@extends("template")
@section("main")
<form action="{{route("posts.store")}}" method="post">
    @csrf
    title:<input type="text" name="title" id="">
    <br> <br>
<textarea name="body" id="" cols="30" rows="5">
</textarea>
<input type="submit" value="post">
</form>

@endsection
