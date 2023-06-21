<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/test.css')}}">

    <title>Document</title>
</head>
<body>
    <nav>
<div class="nav_bar">
   <h1> Nav bar
    @auth
    <a href="/logout">logout</a>
     {{Auth::user()->name}}
        <img src="storage/imgs/{{Auth::user()->trainer->img}}" width="60px">
    @endauth
    @guest
    <a href="/login">login</a>
    <a href="/register">regiter as trainee</a>
    <a href="/trainer/register">regiter as trainer</a>
    @endguest
    <h1>
</div>
    </nav>
    <div class="main">
    @yield("main")
    </div>
    <footer>
        <div class="footer">
           <h1> footer</h1>
        </div>
    </footer>
</body>
</html>
