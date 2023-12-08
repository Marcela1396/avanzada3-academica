@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Listado de Docentes</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        @foreach($query as  $q)
        <div class="col-6">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src='{{url("/img/$q->fotoprofesor")}}' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$q->nomprofesor}}</h5>
                    <p class="card-text">
                        <b> Categoria: </b> {{$q->cateprofesor}}  <br>
                        <b> Programa: </b> {{$q->program->nomprograma}}  <br>
                    </p>
                    <a href="#" class="btn btn-success">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
