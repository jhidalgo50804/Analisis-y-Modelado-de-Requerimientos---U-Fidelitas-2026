@extends('layouts.app')

@section('title', 'Listado de proyectos')

@section('content')
    <h2>Listado de proyectos</h2>

    <div class="actions">
        <input type="text" placeholder="Buscar proyecto...">
        <a href="{{ route('proyectos.create') }}" class="btn">Nuevo proyecto</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th>Responsable</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mejora de captación</td>
                <td><span class="status-badge status-warning">En evaluación</span></td>
                <td><span class="status-badge status-danger">Alta</span></td>
                <td>Ingeniería</td>
                <td><a href="{{ route('proyectos.show') }}">Ver detalle</a></td>
            </tr>
            <tr>
                <td>Ampliación de tubería</td>
                <td><span class="status-badge status-success">Aprobado</span></td>
                <td><span class="status-badge status-info">Media</span></td>
                <td>Gerencia</td>
                <td><a href="{{ route('proyectos.show') }}">Ver detalle</a></td>
            </tr>
            <tr>
                <td>Optimización de bombeo</td>
                <td><span class="status-badge status-info">En seguimiento</span></td>
                <td><span class="status-badge status-info">Media</span></td>
                <td>Administración</td>
                <td><a href="{{ route('proyectos.show') }}">Ver detalle</a></td>
            </tr>
        </tbody>
    </table>
@endsection