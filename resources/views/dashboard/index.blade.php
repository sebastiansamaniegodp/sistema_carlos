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
    <table class="">
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
    <h3><br>Registro de Alumnos</h3>
    <form method="post" action="agregaralumno">
        @csrf
        @method('POST')
        <input id="nombre" name="nombre" type="text" placeholder="Nombre del alumno...">
        <input id="turno" name="turno" type="text" placeholder="Turno...">
        <input id="cedula" name="cedula" type="text" placeholder="Cedula..">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop