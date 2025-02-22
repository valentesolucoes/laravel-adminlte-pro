<!doctype html>
<html lang="pt-br">
<head>
@include('parts.head')

</head>

<body class="@yield('body-class') bg-body-secondary">
    @yield('content')

    @vite('resources/js/app.js')

</body>


</html>
