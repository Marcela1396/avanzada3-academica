<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Program;
use App\Models\Faculty;


class Programas extends Controller
{
    /*
    public function index(){
        $query = DB::table('programa')
        ->join('facultad','facultad', '=', 'codfacultad' )->get();
        // select * from programa join facultad on facultad= codfacultad;
        return view('programas.listado', ['query'=> $query]);
    }
    */

    public function index(){
        $query = Program::all(); // Select * from programas
        return view('programas.listado', ['query'=> $query]);
    }

    public function form_registro(){
        $query = Faculty::all();
        return view('programas.form_registro', compact('query'));
    }

    public function registrar(){

    }


}
