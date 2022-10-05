<x-layouts.app
    :title="$city->name" 
>

<h1>Editando Ciudad {{$city->name}}</h1>

<form method="POST" action="{{route ('ciudades.update',$city)}}">
    @csrf 
    @method('PATCH')

@include('ciudades.form')

<button type="submit">Enviar</button>

</form><br>
<a href="{{route('ciudades.index')}}">REGRESAR</a>

</x-layouts.app>