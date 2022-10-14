<nav class=" navbar-dark bg-dark">
    <div class="container-fluid px-2">
   
      
        <ul class="nav nav-pills flex-column flex-sm-row ">

          <li class="flex-sm-fill text-sm-center nav-link">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
          <li class="flex-sm-fill text-sm-center nav-link">
            <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
          </li>
          
          <li class="flex-sm-fill text-sm-center nav-link">
            <a class="nav-link" href="{{route('ciudades.index')}}">Ciudades</a>
          </li>
        

        <li class="flex-sm-fill text-sm-center nav-link">
            <a class="nav-link" href="{{route('contactanos.index')}}">Contáctanos</a>
          </li>

        

        @guest
        
            <li class="flex-sm-fill text-sm-center nav-link">
                <a class="nav-link"  href="{{route('registro')}}">Registro</a>
            </li>
            <li class="flex-sm-fill text-sm-center nav-link">
                <a class="nav-link"   href="{{route('login')}}">Login</a>
            </li>
       
        @endguest

        @auth
            
            
            <form class="d-flex  nav-link" action="{{route('salir')}}" method="POST">
                @csrf
                <a class="navbar-brand me-5 h1" href="">{{Auth::user()->name}}</a>
                <button class="btn btn-outline-success" type="submit">Salir</button>
        
            </form> 
            
    
        @endauth

      
        
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>




