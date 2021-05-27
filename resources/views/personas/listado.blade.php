<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado personas</title>
</head>
<body>
    <h1>Listado de personas </h1>
    <a href="{{route('personas.create')}}">Nuevo</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Edad</th>
                <td>Email</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $row)
            <tr>
                <td>{{$row->nombres}}</td>
                <td>{{$row->apellidos}}</td>
                <td>{{$row->cedula}}</td>
                <td>{{$row->edad}}</td>
                <td>{{$row->email}}</td>
                <td>
                    <a href="{{ route("personas.edit",$row->id) }}">Editar</a>
                    <a href="">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>