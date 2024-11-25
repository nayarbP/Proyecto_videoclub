<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/js/app.js') <!-- Si estás utilizando Vite -->
</head>
<body>
    <div class="container">
        <!-- Aquí puedes colocar tu barra de navegación u otros elementos comunes -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">VideoClub</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sexo.index') }}">Sexo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('socio.index') }}">Socios</a>
                    </li>
                    <!-- Agrega aquí más enlaces si es necesario -->
                </ul>
            </div>
        </nav>

        <div class="content mt-4">
            @yield('content') <!-- Aquí se incluirá el contenido específico de cada vista -->
        </div>
    </div>
</body>
</html>
