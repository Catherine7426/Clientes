<x-layouts.app
    title="Crear Ciudad" 
>


<h1>Creacion de Ciudades</h1>


<form method="POST" action="{{route ('ciudades.store')}}">
    @csrf

@include('ciudades.form')

<button type="submit">Enviar</button>

</form><br>

<a href="{{route('ciudades.index')}}">REGRESAR</a>

</x-layouts.app>