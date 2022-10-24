<x-layouts.app
    :title="$city->name" 
>

<h1 style="margin-left:35%;margin-top: 50px">Editando Ciudad {{$city->name}}</h1>

<form style="margin-left: 40%; margin-right: 25% ;margin-top: 5%" method="POST" action="{{route ('ciudades.update',$city)}}">
    @csrf 
    @method('PATCH')

@include('ciudades.form')

<a  style="margin-left: -20% ;margin-top: 5%" class="btn btn-light" href="{{route('ciudades.index')}}">REGRESAR</a>

<button style="margin-left:50% ;margin-top: 5%" class="btn btn-primary" type="submit">Enviar</button>

</form><br>


</x-layouts.app>