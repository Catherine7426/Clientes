<x-layouts.app
    title="Login"
>
    <h1>Ingreso</h1>

    <form method="POST" action="{{route ('login')}}">
    @csrf

    

    <label >
        Email
    
        <input type="email"
                name="email"
                value="{{old('email')}}"
                > 
                
        @error('email')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label><br>
    <label >
        Password
    
        <input type="password"
                name="password"
                value="{{old('password')}}"
                > 
                
        @error('password')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label><br>
</label><br>
<label >
    Confirmacion Password

    <input type="password"
            name="password_confirmation"
            value="{{old('password_confirmation')}}"
            > 
            
    @error('password')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror  
    
</label><br>
<label >
    Recuérdame

    <input type="checkbox"
            name="remember"
            
            > 
            
    @error('password')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror  
    
</label><br>

<a href="{{route('registro')}}">Registro</a>
    
<div class="flex items-center justify-between">

{{-- <a href="{{route('login')}}">REGISTRO</a> --}}
    <button type="submit">LOGIN</button>

</div>

</form><br>






</x-layouts.app>