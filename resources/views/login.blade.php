@extends("template")
@section("main")
@if (Session::has("fail"))
   {{Session::get("fail")}}
@endif
<form action="{{route("login")}}" method="post" enctype="multipart/form-data">
    @csrf
    Name:<input type="email" name="email" id="">
    <br> <br>
    Name:<input type="password" name="password" id="">
<input type="submit" value="post">
</form>

@endsection
