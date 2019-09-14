<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h1 class="navbar-brand"> @yield('NavTitle') </h1>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Inicio</a>
                <a class="nav-item nav-link" href="/gastos">Gastos</a>
                <a class="nav-item nav-link" href="/ingresos">Ingresos</a>
                <a class="nav-item nav-link" href="/categoriagastos">Categoria de Gastos</a>
                <a class="nav-item nav-link" href="/categoriaingresos">Categoria de Ingresos</a>
            </div>  
        </div>
    </nav>
    <div class="container">
        @yield('contenido')
    </div>  
</body>
</html>