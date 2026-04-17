@extends('layouts.app')

@section('title', 'Gestión documental')

@section('content')
    <h2>Gestión documental</h2>

    <div class="actions">
        <input type="text" placeholder="Buscar documento...">
        <button class="btn" type="button">Subir documento</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Documento</th>
                <th>Tipo</th>
                <th>Fecha</th>
                <th>Responsable</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Estudio técnico.pdf</td>
                <td>Informe técnico</td>
                <td>14/04/2026</td>
                <td>Ingeniería</td>
                <td><a href="#">Descargar</a></td>
            </tr>
            <tr>
                <td>Acta de aprobación.docx</td>
                <td>Acta</td>
                <td>16/04/2026</td>
                <td>Junta</td>
                <td><a href="#">Descargar</a></td>
            </tr>
        </tbody>
    </table>
@endsection