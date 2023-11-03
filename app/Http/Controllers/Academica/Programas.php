<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Programas extends Controller
{
    //
    public function index(){
        $programas = DB::table('programa')
                    ->join('facultad','facultad', '=', 'codfacultad' )->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('programas.listado', ['program'=> $programas]);
    }
}
