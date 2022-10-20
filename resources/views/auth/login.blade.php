<x-layouts.app
    title="Login"
>
<div class="container">
    <div class="abs-center">
    <h1 style="margin-left:45%;margin-top: 50px" >Ingreso</h1>

    <form style="margin-left: 30%; margin-top: 5%"   method="POST" action="{{route ('login')}}">
    @csrf

    
    <div class="form-group" >
    <label class="col-lg-8 control-label">
        Email
    
        <input  class="form-control" 
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

    <div class="form-group">
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

<div class="form-group">
<label class="col-lg-8 control-label">
    Confirmacion Password

    <div class="form-group">
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

<div class="form-group">
<label class="col-lg-8 control-label" >
    Recuérdame

    <input type="checkbox"
            name="remember"
            
            > 
            
    @error('password')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror  
    
</label>
</div>

<a class="btn btn-info btn-sm" href="{{route('registro')}}">Registro</a>


{{-- <a href="{{route('login')}}">REGISTRO</a> --}}
    <button type="submit" class="btn btn-primary ">LOGIN</button>



</form>

</div>
</div>


</x-layouts.app>