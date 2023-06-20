@extends("template")
@section("main")
@if ($errors->any())
{{-- @foreach ($errors->all() as $error)
 {{$error}}
@endforeach --}}
@endif
<form action="{{route("register")}}" method="post" enctype="multipart/form-data">
    @csrf
    Name:<input type="text" name="name" id="">
    <br> <br>
    Name:<input type="email" name="email" id="">
    <br> <br>
    Name:<input type="password" name="password" id="">
<input type="submit" value="post">
</form>

@endsection
