@extends('layouts.app')

@section('title', 'Seguimiento del proyecto')

@section('content')
    <h2>Seguimiento del proyecto</h2>

    <div class="detail-box">
        <p><strong>Proyecto:</strong> Mejora de captación</p>
        <p><strong>Porcentaje de avance:</strong> 45%</p>
        <p><strong>Estado actual:</strong> En ejecución</p>
    </div>

    <table style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hito / avance</th>
                <th>Responsable</th>
                <th>Incidencias</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>12/04/2026</td>
                <td>Registro inicial del proyecto</td>
                <td>Administración</td>
                <td>Sin incidencias</td>
            </tr>
            <tr>
                <td>15/04/2026</td>
                <td>Evaluación técnica completada</td>
                <td>Ingeniería</td>
                <td>Falta documento financiero</td>
            </tr>
            <tr>
                <td>18/04/2026</td>
                <td>Aprobación de fase inicial</td>
                <td>Junta Directiva</td>
                <td>En espera de contratación</td>
            </tr>
        </tbody>
    </table>
@endsection