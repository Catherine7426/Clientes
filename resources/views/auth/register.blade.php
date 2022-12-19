<x-layouts.app
    title="Registro"
>
<div class="container">
    <div class="abs-center">
    <h1 style="margin-left:45%;margin-top: 50px" >Registrate</h1>

 
    <form style="margin-left: 30%; margin-top: 5%"  method="POST" action="{{route ('registro')}}">
    @csrf

    <div class="form-group" >
    <label class="col-lg-8 control-label">
        Nombre
    
        <input  class="form-control" 
                 type="name"
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
    <label class="col-lg-8 control-label">
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
    <label class="col-lg-8 control-label">
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
<label class="col-lg-8 control-label"  >
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