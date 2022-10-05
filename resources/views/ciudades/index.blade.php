
<x-layouts.app
title="Ciudades"
>
<h1>Ciudades</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td> <a href="{{route ('ciudades.show',$city->id)}}">{{$city->name}}</a> </td>
            <td style="display:flex" > 
                 <a style="  color: red" href="{{route ('ciudades.edit',$city)}}">Editar</a> 

                 <form method="POST"  action="{{route('ciudades.destroy',$city)}}" >
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit">Eliminar</button>
                        
                    </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route ('ciudades.create')}}">Crear Ciudad</a>

</x-layouts.app>


    

   