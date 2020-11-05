@extends('layouts.app')
@section('title','Añadir centro')
@section('content')
    
    <h1> Crear Centro de Produccion </h1>

    <form action="{{route('centroproduccion.store')}}" method="POST">
        @csrf
        <label>Id_suc
            <br>
            <input type="text" name="id_sucursal">
        </label>
        <br>

        <label>Detalle
            <br>
            <input type="text" name="detalle">
        </label>
        <br>

        <label>Activo
            <br>
            <input type="text" name="activo">
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection
    