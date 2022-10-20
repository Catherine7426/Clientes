<x-layouts.app
    title="Crear nuevo Cliente" 
>


<h1 style="margin-left: 50px;margin-top: 50px">Creacion de nuevo Cliente</h1>


<form method="POST" action="{{route ('clientes.store')}}">
 @csrf

@include('clientes.form')

<button class="btn btn-primary" type="submit">Enviar</button>

</form><br>

<a class="btn btn-secundary" href="{{route('clientes.index')}}">REGRESAR</a>

</x-layouts.app>