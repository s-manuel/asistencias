<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edició de personas </title>
</head>
<body>
    <h2>Edición de personas</h2>
    <form action="{{ route('personas.update',$persona->id)}}" method="POST">
        @csrf
        @method('PUT')
            <div>
                <label for="nombres">Nombre * </label>
                <input type="text" value="{{ $persona->nombres }}" name="nombres" id="nombres" placeholder="Ingresar sus nombres" required>
            </div>
            <div>
                <label for="apellidos">Apellidos *</label>
                <input type="text" value="{{ $persona->apellidos }}" name="apellidos" id="nombres" placeholder="Ingresar sus apellidos" required>
            </div>
            <div>
                <label for="cedula">Cedula * </label>
                <input type="text" value="{{ $persona->cedula }}" name="cedula" id="cedula" placeholder="Ingresar su cedula" required>
            </div>
            <div>
                <label for="edad">Edad</label>
                <input type="text" value="{{ $persona->edad }}" name="edad" id="edad" placeholder="Ingresar edad">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" value={{ $persona->email }}"" name="email" id="email" placeholder="Ingresar email">
            </div>
            <div>
                <button type="submit">Guardar</button>
                <a href="{{ route('personas.index') }}">Atras</a>
            </div>
    </form>
</body>
</html>