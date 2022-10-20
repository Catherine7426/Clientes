
<x-layouts.app
title="Ciudades"
>

<h1 style="margin-left: 50px;margin-top: 50px">Ciudades</h1>

<a class="btn btn-primary " style="margin-left: 50px" href="{{route ('ciudades.create')}}">Crear Ciudad</a>

<div class="row w-75 mb-1 p-5">
<table class="table table-dark table-striped table-hover   mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td> <a  style="text-decoration:none; color: white; font-family: arial; href="{{route ('ciudades.show',$city->id)}}">{{$city->name}}</a> </td>
            <td style="display:flex" > 
                 <a class="btn btn-info btn-sm" href="{{route ('ciudades.edit',$city)}}">Editar</a> 

                 <form method="POST"  action="{{route('ciudades.destroy',$city)}}" >
                    @csrf
                    @method('DELETE')
                    
                    <button class="btn btn-danger btn-sm" style="margin-left: 10px" type="submit">Eliminar</button>
                        
                    </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


</x-layouts.app>


    

   