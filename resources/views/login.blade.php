<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="login-page">
    <div class="login-box">
        <h2>Inicio de sesión</h2>

        <form>
            <label for="correo">Correo</label>
            <input type="email" id="correo" placeholder="Ingrese su correo institucional">

            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="Ingrese su contraseña">

            <a href="{{ route('dashboard') }}" class="btn" style="width: 100%; text-align: center;">Ingresar</a>
        </form>
    </div>
</body>
</html>