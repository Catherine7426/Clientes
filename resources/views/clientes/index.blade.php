{{-- @extends('layouts.app')
@section('title','Clientes')

@section('content')
    <h1>Hola Clientes</h1>
@endsection --}}

<x-layouts.app 
    title="Clientes"   
>


    <h1 style="margin-left: 50px;margin-top: 50px">Clientes</h1><br><br>

    <a class="btn btn-primary " style="margin-left: 50px" href="{{route ('clientes.create')}}">Crear nuevo Cliente</a><br><br>


    <form style="margin-left: 50px"  action="{{route('clientes.index')}}" method="GET" >
        <input class="p-1   border border-primary  rounded" name="buscarpor" type="texto" placeholder="Buscar por ciudad" value="{{$buscarpor}}" >
        <button class="btn btn-primary" type="submit">Filtrar</button>

   </form>

   <div class="row w-75 mb-1 p-5">
    <table  class="table table-dark table-striped table-hover   mt-4">
    <thead>
        <tr >
            <th scope="col">ID      </th>
            <th scope="col">NAME    </th>
            <th scope="col">CIUDAD  </th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        
        <tr >
            <td >{{$client->id}}</td>
            <td > <a style="text-decoration:none; color: white; font-family: arial;" href="{{route ('clientes.show',$client->id)}}">{{$client->name}}</a> </td>
            <td >{{$client->city_name}}</td>
            <td > 
                <a class="btn btn-info btn-sm"href="{{route ('clientes.edit',$client->id)}}">Editar</a>

                <form method="POST"  class="d-inline" action="{{route('clientes.destroy',$client->id)}}" >
                    @csrf
                    @method('DELETE')
                    
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        
                    </form>

            
            </td>
            
            
        </tr>
        
    
        @endforeach
    </tbody>
    </table>
</div>

   {{$clients->links()}}


</x-layouts.app>
    
    