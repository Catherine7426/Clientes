
<x-layouts.app 
title="Clientes"   
>

    <h1 style="margin-left:35%;margin-top: 50px">Creacion de nuevo Cliente</h1>


    <form style="margin-left: 25%; margin-right: 25% ;margin-top: 5%" method="POST" action="{{route ('clientes.store')}}">
    @csrf

    @include('clientes.form')

    <a  class="btn btn-light" href="{{route('clientes.index')}}">REGRESAR</a>

    <button style="margin-left:90%" class="btn btn-primary" type="submit">Guardar</button>

    </form><br>

 

</x-layouts.app>