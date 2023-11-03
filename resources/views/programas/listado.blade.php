@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Listado de Programas</h1>
@stop

@section('content')

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp

            @foreach($program as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$p->codprograma}}</td>
                <td>{{$p->nomprograma}}</td>
                <td>{{$p->nomfacultad}}</td>
                <td>
                    <button type="button" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
                @php
                $i= $i+ 1;
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

