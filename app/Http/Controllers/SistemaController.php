<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function proyectos()
    {
        return view('proyectos.index');
    }

    public function crearProyecto()
    {
        return view('proyectos.create');
    }

    public function detalleProyecto()
    {
        return view('proyectos.show');
    }

    public function evaluacion()
    {
        return view('evaluacion');
    }

    public function aprobacion()
    {
        return view('aprobacion');
    }

    public function tareas()
    {
        return view('tareas');
    }

    public function documentos()
    {
        return view('documentos');
    }

    public function bitacora()
    {
        return view('bitacora');
    }

    public function usuarios()
{
    return view('usuarios');
}

public function priorizacion()
{
    return view('priorizacion');
}

public function presupuesto()
{
    return view('presupuesto');
}

public function seguimiento()
{
    return view('seguimiento');
}

public function reportes()
{
    return view('reportes');
}
}