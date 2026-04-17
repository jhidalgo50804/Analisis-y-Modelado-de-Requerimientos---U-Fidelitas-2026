@extends('layouts.app')

@section('title', 'Evaluación de viabilidad')

@section('content')
    <h2>Evaluación de viabilidad</h2>

    <form class="form-box">
        <label>Proyecto</label>
        <input type="text" value="Mejora de captación" readonly>

        <label>Criterio técnico</label>
        <select>
            <option>5 - Muy favorable</option>
            <option>4 - Favorable</option>
            <option>3 - Aceptable</option>
            <option>2 - Riesgoso</option>
            <option>1 - Deficiente</option>
        </select>

        <label>Criterio financiero</label>
        <select>
            <option>5 - Muy favorable</option>
            <option>4 - Favorable</option>
            <option>3 - Aceptable</option>
            <option>2 - Riesgoso</option>
            <option>1 - Deficiente</option>
        </select>

        <label>Criterio operativo</label>
        <select>
            <option>5 - Muy favorable</option>
            <option>4 - Favorable</option>
            <option>3 - Aceptable</option>
            <option>2 - Riesgoso</option>
            <option>1 - Deficiente</option>
        </select>

        <label>Criterio normativo</label>
        <select>
            <option>5 - Muy favorable</option>
            <option>4 - Favorable</option>
            <option>3 - Aceptable</option>
            <option>2 - Riesgoso</option>
            <option>1 - Deficiente</option>
        </select>

        <label>Observaciones</label>
        <textarea placeholder="Ingrese observaciones de la evaluación"></textarea>

        <div class="detail-box" style="margin-top: 20px;">
            <p><strong>Resultado estimado:</strong> Viable</p>
            <p><strong>Puntaje global:</strong> 18/20</p>
        </div>

        <div class="form-actions" style="margin-top: 20px;">
            <button type="button" class="btn">Guardar evaluación</button>
        </div>
    </form>
@endsection