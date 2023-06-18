@extends("template")
@section("main")
<h1>posts</h1>
@foreach ($posts as $post)
  <div class="post">
   <h1>{{$post["title"]}}</h1>
   <p>{{$post["body"]}}</p>
</div>
   @endforeach
@endsection

