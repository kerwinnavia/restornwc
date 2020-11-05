@extends('layouts.app')
@section('content')
    <h1>Actualizar</h1>
    <form method="POST" action="{{url('centroproduccion/'.$data[0]['ID'])}}">
        @csrf
        @method('PUT')
        
        <br>
        id sucursal: <input type="text" name="id_sucursal" placeholder="id_sucursal" value="{{$data[0]['Id_sucursal']}}">
        <br>
        Detalle: <input type="text" name="detalle" placeholder="detalle" value="{{$data[0]['Detalle']}}">
        <br>
        Activo: <input type="number" name="activo" placeholder="Activo" value="{{$data[0]['Activo']}}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection