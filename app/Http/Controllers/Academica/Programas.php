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

    public function registrar(Request $request){
        $programa = new Program();
        $programa->codprograma = $request->input('cod_programa');
        $programa->nomprograma = $request->input('nom_programa');
        $programa->facultad = $request->input('facultad');
        $programa->save();
        return redirect()->route('listado_programas');
    }

    public function form_edicion($id){
        $programa = Program::findorFail($id);
        $facultades = Faculty::all();
        return view('programas.form_edicion', compact('programa', 'facultades'));
    }

    public function editar(Request $request, $id){
        $programa = Program::findorFail($id);
        $programa->nomprograma = $request->input('nom_programa');
        $programa->facultad = $request->input('facultad');
        $programa->save();
        return redirect()->route('listado_programas');
    }

    public function eliminar($id){
        $programa = Program::findorFail($id);
        $programa->delete();
        return redirect()->route('listado_programas');
    }

}
