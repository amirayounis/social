@extends("template")
@section("main")
@if ($errors->any())
{{-- @foreach ($errors->all() as $error)
 {{$error}}
@endforeach --}}
@endif
<form action="{{route("trainer.register")}}" method="post" enctype="multipart/form-data">
    @csrf
    Name:<input type="text" name="name" id="">
    <br> <br>
    Email:<input type="email" name="email" id="">
    <br> <br>
    pass:<input type="password" name="password" id="">
    car_l:<input type="text" name="car_lances" id="">
   img:<input type="file" name="img" id="">
<input type="submit" value="post">
</form>

@endsection
