<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form  method="POST" action="{{route('user.registro')}}" novalidate >
        @csrf
        <label for="email">Correo:</label>
        <input type="email" name="email" id="email" class="border p-3 w-full rounded-lg @error('email')
            border-red-500
        @enderror">
        @error('email')
            <span class="text-red-500">{{str_replace('email', 'correo', $message)}}</span>
        @enderror

        <label for="contrasena">Contraseña:</label>
        <input type="text" name="password">
        @error('password')
            <span class="text-red-500">{{str_replace('password', 'contraseña', $message)}}</span>
        @enderror

        <label for="tipoUsuario">Tipo de usuario:</label>
        <input type="text" name='tipoUsuario'>
        @error('tipoUsuario')
        <span class="text-red-500">{{str_replace('tipoUsuario', 'usuario', $message)}}</span>
    @enderror

        <label for="nombre">Nombre:</label>
        <input type="text" name="name">
        @error('name')
            <span class="text-red-500">{{str_replace('name', 'nombre', $message)}}</span>
        @enderror

        <label for="apellido">Apellido:</label>
        <input type="text" name="lastname">

        @error('lastname')
            <span class="text-red-500">{{str_replace('lastname', 'apellido', $message)}}</span>
        @enderror

        <label for="nacimiento">Nacimiento:</label>
        <input type="text" name="fecha">

        <input type="submit" value="Create">
    </form>
</body>
</html>
