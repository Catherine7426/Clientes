<x-layouts.app
    :title="$client->name" 
>

<h1 style="margin-left:30%;margin-top: 50px">Editando Cliente {{$client->name}}</h1>

<form style="margin-left: 25%; margin-right: 25% ;margin-top: 5%" method="POST" action="{{route ('clientes.update',$client)}}">
    @csrf 
    @method('PATCH')

@include('clientes.form')
<a  class="btn btn-light" href="{{route('clientes.index')}}">REGRESAR</a>

<button style="margin-left:90%" class="btn btn-primary" type="submit">Enviar</button>



</form>



</x-layouts.app>