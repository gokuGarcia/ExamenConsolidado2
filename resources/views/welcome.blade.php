<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido | Sistema de Eventos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/welcomeStyle.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/organizar.png') }}" type="image/png">

</head>

<body>

    <div class="welcome-card text-center">
        <img src="{{ asset('img/organizar.png') }}" alt="Logo" width="80" class="mb-4">
        <h1 class="welcome-title">Bienvenido al Sistema de Eventos 🎉</h1>
        <p class="welcome-subtitle">Gestiona eventos, organizadores y participaciones de manera ágil y profesional.</p>
        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom btn-primary-custom">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-custom">Registrarse</a>
        </div>
    </div>

</body>

</html>
