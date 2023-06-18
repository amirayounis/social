<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/test.css">
    <title>Document</title>

</head>
<body>
    {{-- old --}}
    <h1>my first page <?php echo $name ?></h1>
    {{-- new --}}
    <h1>my first page {{$name}}</h1>
    @if(isset($data["email"]))
    <h1>{{$data["email"]}}</h1>
    @endif
    {{-- loops --}}
    @for ($i=0;$i<15;$i++)
        {{$i}}
        <br>
    @endfor
</body>
</html>
