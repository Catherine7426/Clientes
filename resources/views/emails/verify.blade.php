<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Completar Registro</title>
</head>
<body>
    <h1>Completa tu Registro</h1>

    <form method="POST" action="{{route ('ciudades.store')}}">
        @csrf
    
    @include('ciudades.form')
    
    <button type="submit">Enviar</button>
    
    </form><br>
</body>
</html>