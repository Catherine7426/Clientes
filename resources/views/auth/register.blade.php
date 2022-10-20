<x-layouts.app
    title="Registro"
>

    <h1 style="margin-left:45%;margin-top: 50px;margin-botton: 20px" >Registrate</h1>

    <div class="container">
    <form style="margin-left: 43%; margin-top: 5%"  method="POST" action="{{route ('registro')}}">
    @csrf

    <div class=""mb-3"" >
    <label class="form-label">
        Nombre
    
        <input  class="form-control" 
                 type="text"
                name="name"
                value="{{old('name')}}"
                > 
                
        @error('name')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label>
    </div>

    
    <div class=""mb-3"">
    <label class="form-label">
        Email
    
        <input class="form-control"
                type="email"
                name="email"
                value="{{old('email')}}"
                > 
                
        @error('email')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label>
</div>

<div class=""mb-3"">
    <label class="form-label">
        Password
    
        <input class="form-control"
                type="password"
                name="password"
                value="{{old('password')}}"
                > 
                
        @error('password')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label>

</div>

<div class=""mb-3"">
<label class="form-label"  >
    Confirmacion Password

    <input class="form-control"
            type="password"
            name="password_confirmation"
            value="{{old('password_confirmation')}}"
            > 
            
    @error('password')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror  
    
</label>
</div>


<a class="btn btn-info btn-sm" href="{{route('login')}}">Login</a>
    
{{-- <a href="{{route('login')}}">REGISTRO</a> --}}
    <button type="submit"  class="btn btn-primary " >REGISTRAR</button>

</form>
</div>

</x-layouts.app>