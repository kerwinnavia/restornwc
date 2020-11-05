<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" >

    <tr>

        <td>ID</td>
        <td>Id_sucursal</td>
        <td>Detalle</td>
        <td>Activo</td>

    </tr>
    @foreach ($datas as $data)
        <tr>
            <td>{{$data['Id']}}</td>
            <td>{{$data['Id_sucursal']}}</td>
            <td>{{$data['Detalle']}}</td>
            <td>{{$data['Activo']}}</td>
            
            <td>
                <a href="{{url('/centroproduccion/'.$data['Id'].'/edit')}}">Editar</a>
                <br>
                <form method="post" action="{{url('/centroproduccion/'.$data['Id'])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
<a href="{{route('centroproduccion.create')}}">
    <button>Nuevo</button>
</a>

</body>
</html>