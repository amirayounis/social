@extends("template")
@section("main")
<h1>posts</h1>

{{-- {{Auth::user()->name}} --}}
@foreach ($comments as $comment)
  <div class="post">
    <p>{{$comment->post->title}}:{{$comment->created_at}}</p>
   <p>{{$comment["body"]}}</p>

</div>
   @endforeach
@endsection

