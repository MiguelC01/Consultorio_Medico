<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Document</title>
</head>
<body id="login">
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3></h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Alumno</button>
                </div>
                <div class="caja__trasera-register">
                    <h3></h3>
                    <p></p>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__registrarse">Personal médico</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar sesión como alumno</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="{{route('user.login')}}" method="POST" class="formulario__register">
                    @csrf
                    <input type="text" placeholder="Correo Electronico" name="email" class="@error('email')
                    border-red-500
                @enderror">
                @error('email')
                    <span class="text-red-500">{{str_replace('email', 'correo', $message)}}</span>
                @enderror

                    <input type="password" placeholder="Contraseña" name="password" class="@error('password')
                    border-red-500
                @enderror">
                @error('password')
                    <span class="text-red-500">{{str_replace('email', 'correo', $message)}}</span>
                @enderror

                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>

    </main>
    <a href="#">lol</a>

    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>
