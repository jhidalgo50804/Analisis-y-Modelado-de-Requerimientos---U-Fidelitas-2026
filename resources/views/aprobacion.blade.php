@extends('layouts.app')

@section('title', 'Aprobación de proyectos')

@section('content')
    <h2>Aprobación de proyectos</h2>

    <div class="detail-box">
        <p><strong>Proyecto:</strong> Mejora de captación</p>
        <p><strong>Estado actual:</strong> En evaluación</p>
        <p><strong>Resultado de viabilidad:</strong> Viable</p>
        <p><strong>Responsable:</strong> Junta administrativa</p>
    </div>

    <form class="form-box" style="margin-top: 20px;">
        <label>Decisión</label>
        <select>
            <option>Aprobar</option>
            <option>Rechazar</option>
            <option>Pausar</option>
        </select>

        <label>Acuerdo / observaciones</label>
        <textarea placeholder="Registre el acuerdo o justificación"></textarea>

        <label>Responsable de la decisión</label>
        <input type="text" placeholder="Nombre del responsable">

        <div class="form-actions">
            <button type="button" class="btn">Guardar decisión</button>
        </div>
    </form>
@endsection