<x-layouts.app
    title="Crear Ciudad" 
>


<h1 style="margin-left:35%;margin-top: 50px">Creacion de Ciudades</h1>


<form style="margin-left: 40%; margin-right: 25% ;margin-top: 5%" method="POST" action="{{route ('ciudades.store')}}">
    @csrf

@include('ciudades.form')

<a style="margin-left:10%" class="btn btn-light" href="{{route('ciudades.index')}}">REGRESAR</a> <br><br>

<button style="margin-left:14%" class="btn btn-primary" type="submit">Enviar</button>

</form><br>

</x-layouts.app>