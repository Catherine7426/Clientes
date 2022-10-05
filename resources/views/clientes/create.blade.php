<x-layouts.app
    title="Crear nuevo Cliente" 
>


<h1>Creacion de nuevo Cliente</h1>


<form method="POST" action="{{route ('clientes.store')}}">
    @csrf

@include('clientes.form')

<button type="submit">Enviar</button>

</form><br>

<a href="{{route('clientes.index')}}">REGRESAR</a>

</x-layouts.app>