@extends('layouts.app')

@section('title', 'Gestión de presupuesto')

@section('content')
    <h2>Gestión de presupuesto</h2>

    <div class="cards">
        <div class="card">
            <h3>Presupuesto base</h3>
            <p>₡ 12 500 000</p>
        </div>
        <div class="card">
            <h3>Monto aprobado</h3>
            <p>₡ 10 000 000</p>
        </div>
        <div class="card">
            <h3>Monto ejecutado</h3>
            <p>₡ 4 250 000</p>
        </div>
        <div class="card">
            <h3>Saldo disponible</h3>
            <p>₡ 5 750 000</p>
        </div>
    </div>

    <form class="form-box" style="margin-top: 20px;">
        <label>Observaciones presupuestarias</label>
        <textarea placeholder="Ingrese observaciones sobre el estado del presupuesto"></textarea>

        <div class="form-actions">
            <button type="button" class="btn">Guardar cambios</button>
        </div>
    </form>
@endsection