@extends('layouts.app')

@section('title', 'Registrar proyecto')

@section('content')
    <h2>Registrar proyecto</h2>

    <form class="form-box">
        <label>Nombre del proyecto</label>
        <input type="text" placeholder="Ingrese el nombre">

        <label>Justificación</label>
        <textarea placeholder="Describa la justificación"></textarea>

        <label>Impacto</label>
        <input type="text" placeholder="Impacto esperado">

        <label>Riesgo</label>
        <select>
            <option>Bajo</option>
            <option>Medio</option>
            <option>Alto</option>
        </select>

        <label>Responsable</label>
        <input type="text" placeholder="Nombre del responsable">

        <div class="form-actions">
            <button type="button" class="btn">Guardar</button>
            <a href="{{ route('proyectos.index') }}" class="btn secondary">Cancelar</a>
        </div>
    </form>
@endsection