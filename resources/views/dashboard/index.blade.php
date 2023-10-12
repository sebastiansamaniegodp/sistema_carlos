@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido.</h1>
@stop

@section('content')
    <p>Panel de control de alumnos del sistema web.</p>
    @if($m != "")
        {{$m}}
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID </th>
                <th>Cédula</th>
                <th> Alumno </th>
                <th> Turno </th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $a)
            <tr>
                <td>{{$a->id}} </td>
                <td>{{$a->nrocedula}}</td>
                <td>{{$a->nombre}} </td>
                <td>{{$a->turno}}</td>
                <td><form method="post" action="eliminaralumno/{{$a->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form></td>
            </tr>
            <tr>
                @endforeach
        </tbody>
    </table>
    <h3>Registro de Alumnos</h3>
    <form class="form-horizontal" method="post" action="agregaralumno">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre del alumno...">
        </div>
        <div class="form-group">
            <label for="turno">Turno:</label>
            <input class="form-control" id="turno" name="turno" type="text" placeholder="Turno...">
        </div>
        <div class="form-group">
            <label for="cedula">Cedula:</label>
            <input class="form-control" id="cedula" name="cedula" type="text" placeholder="Cedula..">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
    <br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop