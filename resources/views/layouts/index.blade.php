<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container">
        <nav>
            <a href="/">Home</a>
            <a href="{{route('animalsList')}}">Animal</a>
            <a href="{{route('create.animal')}}">New Animals</a>
        </nav>
        @yield('content')
    </div>
    
    <script src="{{asset('js/app.js')}}"><script>
</body>
</html>