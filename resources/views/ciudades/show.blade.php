<x-layouts.app
    :title="$city->name" 
>



<h1>Ciudad :{{$city->name}}</h1>
<h4>ID: {{$city->id}}</h4>
<h4>Fecha de creacion :{{$city->created_at}}</h4><br>
<a href="{{route('ciudades.index')}}">REGRESAR</a>

</x-layouts.app>