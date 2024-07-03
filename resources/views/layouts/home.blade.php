<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>

<div class="jumbotron text-center">
    <h1>Header</h1>
    <p>Resize this responsive page to see the effect!</p>
    <a href="/about">About Us</a>
    <a href="{{route('test',['id'=>06,'name'=>'yusufcan'])}}">Test Page </a>
    <a href="/home">Home Page</a>
    @yield('header')
</div>

<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('content')
    </div>
</div>

<div class="jumbotron text-center">
    <h1>Footer</h1>
    <p>Yoğurdu sarımsaklasakta mı saklasak sarımsaklamasakta mı saklasakk...</p>
    @yield('footer')
</div>

</body>
</html>
