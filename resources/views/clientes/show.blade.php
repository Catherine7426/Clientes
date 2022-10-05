<x-layouts.app
    :title="$client->name" 
>



<h1>cliente :{{$client->name}}</h1>
<h4>ID: {{$client->id}}</h4>


@foreach ($cities as $city)
@if ($client->city_id == $city->id)
    <h4>Ciudad: {{$city->name}}</h4> 
@endif

@endforeach

<h4>Fecha de creacion :{{$client->created_at}}</h4>
<a href="{{route('clientes.index')}}">REGRESAR</a>

</x-layouts.app>