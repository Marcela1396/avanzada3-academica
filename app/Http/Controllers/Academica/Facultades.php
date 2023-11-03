<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faculty;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultad')->get(); // select * from facultad
        return view('facultades.listado', ['faculty'=>$facultades]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    public function registrar(Request $request){
        $facultad = new Faculty();
        $facultad->codfacultad = $request->input('cod_facultad');
        $facultad->nomfacultad = $request->input('nom_facultad');
        $facultad->save();
        return redirect()->route('listado_facultades');
    }
}
