@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')

    <div class="container" align="right">
        <a href="{{route('form_registro_fac')}}" class="btn btn-primary">Adicionar</a>
        <br><br>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($faculty as $f)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{ $f->codfacultad }}</td>
                <td>{{ $f->nomfacultad }}</td>
                <td>
                    <a href="{{route('editar_fac',$f->codfacultad)}}" class="btn btn-success">Editar</a>
                    <a href="{{route('eliminar_fac', $f->codfacultad)}}" class="btn btn-danger">Eliminar</a>
                </td>
                @php
                    $i = $i + 1;
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

