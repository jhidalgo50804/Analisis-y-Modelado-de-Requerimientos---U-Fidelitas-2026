@extends('layouts.app')

@section('title', 'Gestión de tareas')

@section('content')
    <h2>Gestión de tareas (Kanban)</h2>

    <div class="kanban-board">
        <div class="kanban-column">
            <h3>Pendiente</h3>
            <div class="kanban-card">
                <strong>Inspección inicial</strong>
                <p>Responsable: Ingeniería</p>
                <p>Fecha límite: 20/04/2026</p>
            </div>
            <div class="kanban-card">
                <strong>Recolección documental</strong>
                <p>Responsable: Secretaría</p>
                <p>Fecha límite: 22/04/2026</p>
            </div>
        </div>

        <div class="kanban-column">
            <h3>En proceso</h3>
            <div class="kanban-card">
                <strong>Evaluación técnica</strong>
                <p>Responsable: Ingeniero</p>
                <p>Fecha límite: 25/04/2026</p>
            </div>
        </div>

        <div class="kanban-column">
            <h3>Completada</h3>
            <div class="kanban-card">
                <strong>Registro del proyecto</strong>
                <p>Responsable: Administración</p>
                <p>Finalizada: 15/04/2026</p>
            </div>
        </div>
    </div>
@endsection