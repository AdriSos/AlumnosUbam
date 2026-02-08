<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Escolar Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .btn-custom { border-radius: 8px; padding: 8px 20px; fw-bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">🏫 ESCUELA DIGITAL</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/registro-alumnos') }}">Alumnos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/registro-grupos') }}">Grupos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/alumnos-registrados') }}">Lista</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/configuracion') }}">Ajustes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
