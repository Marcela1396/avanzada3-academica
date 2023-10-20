<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Programas extends Controller
{
    //
    public function index(){
        return view('programas.listado');
    }
}
