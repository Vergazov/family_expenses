<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <div class="container mt-5">
        <nav class="navbar nav nav-pills nav-justified " style="background-color: #e3f2fd;">
            <a class="nav-link" aria-current="page" href="{{route('add')}}">Посчитать расходы</a>
            <a class="nav-link " href="{{route('list')}}">Список расходов</a>
        </nav>
    </div>
<body>
@yield('content')
</body>
</html>
