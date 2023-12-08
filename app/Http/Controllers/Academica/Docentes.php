<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class Docentes extends Controller
{

    public function index(){
        $profesores = Teacher::all();
        return view('docentes.listado', ['profes'=> $profesores]);
    }
}
