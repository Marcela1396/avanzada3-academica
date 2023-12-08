<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Program;
use App\Models\Faculty;
use DataTables;

class Programas extends Controller
{
    //
    public function index(){
        $programas = Program::all();
        return view('programas.listado', ['program'=> $programas]);
    }

    public function form_registro(){
        $facultades = Faculty::all();
        return view('programas.form_registro', compact('facultades'));
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
        $facultad = Faculty::findorFail($id);
        return view('programas.form_edicion', ['faculty'=>$facultad]);
    }

    public function editar(Request $request, $id){
        $facultad = Faculty::findorFail($id);
        $facultad->nomfacultad = $request->input('nom_facultad');
        $facultad->save();
        return redirect()->route('listado_programas');
    }

    public function eliminar($id){
        $facultad = Faculty::findorFail($id);
        $facultad->delete();
        return redirect()->route('listado_programas');
    }
}
