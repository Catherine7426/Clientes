{{-- @extends('layouts.app')
@section('title','Usuarios')

@section('content')
    <h1> Hola usuarios</h1>
@endsection --}}

<x-layouts.app
    title="Usuarios"
>
    <h1>Hola Usuarios</h1>

    @foreach ($users as $user)
        <h2>{{$user->name}}</h2>
        
    @endforeach

</x-layouts.app>
    

 