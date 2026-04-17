@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Panel principal</h2>

    <div class="cards">
        <div class="card">
            <h3>Proyectos activos</h3>
            <p>12</p>
        </div>
        <div class="card">
            <h3>En evaluación</h3>
            <p>5</p>
        </div>
        <div class="card">
            <h3>Aprobados</h3>
            <p>7</p>
        </div>
        <div class="card">
            <h3>Alertas</h3>
            <p>3</p>
        </div>
    </div>

    <div class="detail-box" style="margin-top: 24px;">
        <h3 style="margin-top: 0; color: #0b3559;">Resumen ejecutivo</h3>
        <p>El sistema centraliza el registro, evaluación, aprobación, seguimiento y control documental de proyectos de la ASADA.</p>
        <p>Actualmente se observa mayor concentración de iniciativas en fase de evaluación y ejecución inicial.</p>
    </div>
@endsection