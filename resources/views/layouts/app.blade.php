<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión ASADA')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="topbar">
        <h1>Sistema Integral de Gestión de Proyectos para ASADAS</h1>
    </header>

    <div class="container">
        <aside class="sidebar">
            <nav>
<ul>
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('proyectos.index') }}">Proyectos</a></li>
    <li><a href="{{ route('proyectos.create') }}">Nuevo Proyecto</a></li>
    <li><a href="{{ route('proyectos.show') }}">Detalle Proyecto</a></li>
    <li><a href="{{ route('evaluacion') }}">Evaluación</a></li>
    <li><a href="{{ route('aprobacion') }}">Aprobación</a></li>
    <li><a href="{{ route('tareas') }}">Tareas</a></li>
    <li><a href="{{ route('documentos') }}">Documentos</a></li>
    <li><a href="{{ route('bitacora') }}">Bitácora</a></li>
    <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
    <li><a href="{{ route('priorizacion') }}">Priorización</a></li>
    <li><a href="{{ route('presupuesto') }}">Presupuesto</a></li>
    <li><a href="{{ route('seguimiento') }}">Seguimiento</a></li>
    <li><a href="{{ route('reportes') }}">Reportes</a></li>
    <li><a href="{{ route('login') }}">Cerrar sesión</a></li>
</ul>
            </nav>
        </aside>

        <main class="content">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>