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

@guest
<form method="post" action="{{route('login')}}">
    @csrf
    @method('POST')
    <fieldset>
        <legend>Acceso</legend>
        <label for="email">Usuario</label>
        <input type="text" name="email">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass">
        <button type="submit" name="submit" value="validar">Validar</button>
    </fieldset>
</form>
@endguest
@auth
<form action="logout" method="POST">
    @csrf
    <input type="submit" value="Logout">
</form>
@endauth
</body>
</html>
