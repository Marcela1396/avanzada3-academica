@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Listado de Programas</h1>
@stop

@section('content')

    <div class="container" align="right">
            <a href="{{route('form_registro_prg')}}" class="btn btn-primary">Adicionar</a>
            <br><br>
    </div>

    <table class="table" id="tabla-programas">
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
                <td>{{$p->faculty->nomfacultad}}</td>
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
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

@section('js')
    <!-- jQuery JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabla-programas').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });
        });
    </script>
@stop

