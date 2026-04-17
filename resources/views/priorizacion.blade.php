@extends('layouts.app')

@section('title', 'Priorización de proyectos')

@section('content')
    <h2>Priorización de proyectos</h2>

    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Proyecto</th>
                <th>Viabilidad</th>
                <th>Criticidad</th>
                <th>Prioridad final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mejora de captación</td>
                <td>18/20</td>
                <td>Alta</td>
                <td>Muy alta</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ampliación de tubería</td>
                <td>16/20</td>
                <td>Media</td>
                <td>Alta</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Optimización de bombeo</td>
                <td>14/20</td>
                <td>Media</td>
                <td>Media</td>
            </tr>
        </tbody>
    </table>
@endsection