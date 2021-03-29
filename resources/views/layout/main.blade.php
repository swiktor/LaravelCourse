<html lang="pl">
<head>
    <title>@yield('title',$appName)</title>
    <script src="{{mix('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style>
        td {
            padding-right: 25px;
        }
    </style>
</head>
<body>
<h1>{{$appName}}</h1>
<div class="sidebar">
    @section('sidebar')
        <ul>
            <li><a href="#">...</a></li>
        </ul>
    @show
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
