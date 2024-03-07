<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo - @yield('titel')</title>
</head>
<body>
    @section('header')
        Cabecera de la web (master)
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
     PIE DE PAGINA DE LA Web
    @show
</body>
</html>