<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.create')}}">Create post</a>
            </li>

        </ul>


    </div>


    <div>
        @yield('content')

    </div>
</body>
</html>
