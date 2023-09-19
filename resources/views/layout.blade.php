<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','default')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <nav class="nav">
        <ul>
            <li class="menu"><a href="{{url('/')}}">HOME</a></li>
            <li class="menu"><a href="{{route('about')}}">ABOUT</a></li>
            <li class="menu"><a href="{{route('projects')}}">PROJECTS</a></li>
            <li class="menu"><a href="{{route('services')}}">SERVICES</a></li>
            <li class="menu"><a href="{{route('contact')}}">CONTACT</a></li>
        </ul>
    </nav>
    @yield("content")
</body>
</html>