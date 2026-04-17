@extends('layouts.app')

@section('title', 'Bitácora')

@section('content')
    <h2>Bitácora / Auditoría</h2>

    <div class="actions">
        <input type="text" placeholder="Buscar evento...">
        <button class="btn" type="button">Filtrar</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Fecha y hora</th>
                <th>Usuario</th>
                <th>Módulo</th>
                <th>Acción</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>16/04/2026 14:10</td>
                <td>admin@asada.com</td>
                <td>Proyectos</td>
                <td>Crear</td>
                <td>Se registró el proyecto Mejora de captación</td>
            </tr>
            <tr>
                <td>16/04/2026 14:25</td>
                <td>ingenieria@asada.com</td>
                <td>Evaluación</td>
                <td>Actualizar</td>
                <td>Se registró la evaluación técnica y financiera</td>
            </tr>
            <tr>
                <td>16/04/2026 14:40</td>
                <td>gerencia@asada.com</td>
                <td>Aprobación</td>
                <td>Aprobar</td>
                <td>Se aprobó el proyecto para fase inicial</td>
            </tr>
        </tbody>
    </table>
@endsection