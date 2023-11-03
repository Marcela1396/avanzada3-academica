@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')

    <div class="container">
        <a href="{{route('form_registro_fac')}}" class="btn btn-primary">Adicionar</a>
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
                    <button type="button" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
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

