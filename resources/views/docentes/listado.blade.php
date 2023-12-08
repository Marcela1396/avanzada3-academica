@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Listado de Docentes</h1>
@stop

@section('content')

<div class="container" align="right">
        <a href="{{route('form_registro_fac')}}" class="btn btn-primary">Adicionar</a>
        <br><br>
</div>

<div class="container">


    <div class="row">

    @foreach ($profes as $p)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src='{{url("/img/$p->fotoprofesor")}}' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$p->nomprofesor}}</h5>
                    <p class="card-text">
                     <b> Categoría: </b>  {{$p->cateprofesor}} <br>
                     <b> Programa: </b>  {{$p->program->nomprograma}} <br>
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
