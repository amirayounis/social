@extends("template")
@section("main")
@if ($errors->any())
{{-- @foreach ($errors->all() as $error)
 {{$error}}
@endforeach --}}
@endif
<form action="{{route("posts.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    title:<input type="text" name="title" id="">
    @error("title")
     {{$errors->first("title")}}
    @enderror
    <br> <br>
<textarea name="body" id="" cols="30" rows="5">
</textarea>
@error("body")
{{$errors->first("body")}}
@enderror
image:<input type="file" name="img" id="">
@error("img")
{{$errors->first("img")}}
@enderror
<input type="submit" value="post">
</form>

@endsection
