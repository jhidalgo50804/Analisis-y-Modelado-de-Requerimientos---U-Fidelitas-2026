@extends('layouts.app')

@section('title', 'Detalle del proyecto')

@section('content')
    <h2>Detalle del proyecto</h2>

    <div class="detail-box">
        <p><strong>Nombre:</strong> Mejora de captación</p>
        <p><strong>Estado:</strong> <span class="status-badge status-warning">En evaluación</span></p>
        <p><strong>Prioridad:</strong> <span class="status-badge status-danger">Alta</span></p>
        <p><strong>Responsable:</strong> Ingeniería</p>
        <p><strong>Descripción:</strong> Proyecto orientado a mejorar el sistema de captación de agua y fortalecer la continuidad del servicio.</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Evaluación de viabilidad</h3>
            <p>Resultado preliminar favorable con base técnica y financiera.</p>
        </div>
        <div class="card">
            <h3>Gestión documental</h3>
            <p>Expediente con estudios, actas y evidencias del proyecto.</p>
        </div>
        <div class="card">
            <h3>Tareas</h3>
            <p>Seguimiento de responsables, fechas y avance operativo.</p>
        </div>
        <div class="card">
            <h3>Bitácora</h3>
            <p>Registro histórico de acciones críticas y decisiones.</p>
        </div>
    </div>
@endsection