<nav>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('clientes.index')}}">Clientes</a></li>
        {{-- <li><a href="{{route('users')}}">Usuarios</a></li>--}}
        <li><a href="{{route('ciudades.index')}}">Ciudades</a></li>
        <li> <a href="{{route('contactanos.index')}}">Contáctanos</a> </li><br><br>

        @guest
            <li><a href="{{route('registro')}}">Registro</a></li>
            <li><a href="{{route('login')}}">Login</a></li>  
        @endguest

        @auth

            <a href="">{{Auth::user()->name}}</a>
           <form action="{{route('salir')}}" method="POST">

            @csrf

            <button>Salir</button>
        
            </form> 
        @endauth
         
    </ul>
</nav>