<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Administradores</title>
</head>
<body>
    <h2>Login de Administradores</h2>

    @if ($errors->any())
        <div>
            <strong>{{ $errors->first('message') }}</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <label for="user">Usuario:</label>
        <input type="text" name="user" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
