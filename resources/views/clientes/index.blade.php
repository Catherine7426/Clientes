{{-- @extends('layouts.app')
@section('title','Clientes')

@section('content')
    <h1>Hola Clientes</h1>
@endsection --}}

<x-layouts.app
    title="Clientes"

    
>


    <h1>Clientes</h1>

   <form action="{{route('clientes.index')}}" method="GET" >
        <input name="buscarpor" type="texto" placeholder="Buscar por ciudad" value="{{$buscarpor}}" >
        <button type="submit">Filtrar</button>

   </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CIUDAD</th>
                <th>Opciones</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
        
            <tr>
                <td>{{$client->id}}</td>
                <td> <a href="{{route ('clientes.show',$client->id)}}">{{$client->name}}</a> </td>
                <td>{{$client->city_name}}</td>
                
                <td style="display:flex" > 
                    <a style="  color: red" href="{{route ('clientes.edit',$client->id)}}">Editar</a>

                    <form method="POST"  action="{{route('clientes.destroy',$client->id)}}" >
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit">Eliminar</button>
                            
                        </form>

                
                </td>
                
                
            </tr>
            
        
            @endforeach

            

        </tbody>
    </table> <br><br>

    
    
    
   
    
    <a href="{{route ('clientes.create')}}">Crear nuevo Cliente</a><br><br>

    {{$clients->links()}}

</x-layouts.app>
    
    