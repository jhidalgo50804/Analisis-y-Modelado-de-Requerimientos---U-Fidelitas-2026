@extends('layouts.app')

@section('title', 'Gestión de usuarios')

@section('content')
    <h2>Gestión de usuarios</h2>

    <div class="actions">
        <input type="text" placeholder="Buscar usuario...">
        <button class="btn" type="button">Nuevo usuario</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mauricio Alvarado</td>
                <td>admin@asada.com</td>
                <td>Administrador</td>
                <td>Activo</td>
                <td><a href="#">Editar</a></td>
            </tr>
            <tr>
                <td>Junta Directiva</td>
                <td>gerencia@asada.com</td>
                <td>Gerencia</td>
                <td>Activo</td>
                <td><a href="#">Editar</a></td>
            </tr>
            <tr>
                <td>Área Técnica</td>
                <td>ingenieria@asada.com</td>
                <td>Ingeniería</td>
                <td>Activo</td>
                <td><a href="#">Editar</a></td>
            </tr>
        </tbody>
    </table>
@endsection