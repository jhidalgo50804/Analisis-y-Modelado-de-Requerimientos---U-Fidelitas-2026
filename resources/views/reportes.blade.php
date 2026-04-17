@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
    <h2>Reportes</h2>

    <div class="cards">
        <div class="card">
            <h3>Proyectos activos</h3>
            <p>12</p>
        </div>
        <div class="card">
            <h3>Proyectos aprobados</h3>
            <p>7</p>
        </div>
        <div class="card">
            <h3>En evaluación</h3>
            <p>5</p>
        </div>
        <div class="card">
            <h3>Ejecución presupuestaria</h3>
            <p>42%</p>
        </div>
    </div>

    <table style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Reporte</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Reporte por estado</td>
                <td>Resume proyectos según su estado actual.</td>
                <td><a href="#">Ver</a></td>
            </tr>
            <tr>
                <td>Reporte de prioridad</td>
                <td>Muestra ranking de proyectos priorizados.</td>
                <td><a href="#">Ver</a></td>
            </tr>
            <tr>
                <td>Reporte presupuestario</td>
                <td>Resume ejecución y saldo por proyecto.</td>
                <td><a href="#">Ver</a></td>
            </tr>
        </tbody>
    </table>
@endsection