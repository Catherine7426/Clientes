<x-layouts.app
    title="Registro"
>
    <h1>Registrate</h1>

    <form method="POST" action="{{route ('registro')}}">
    @csrf

    <label >
        Nombre
    
        <input type="text"
                name="name"
                value="{{old('name')}}"
                > 
                
        @error('name')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label><br>

    

    <label >
        Cliente

        <select name="" id="">

            @foreach ($users as $user)
                <option value="$user->id">{{$user->client_id}}</option>
            @endforeach
        </select>
    
        {{-- <input type="text"
                name="name"
                value="{{old('client_id')}}"
                >  --}}
                
        @error('client_id')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label><br>

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
<a href="{{route('login')}}">Login</a>
    
<div class="flex items-center justify-between">

{{-- <a href="{{route('login')}}">REGISTRO</a> --}}
    <button type="submit">REGISTRAR</button>

</div>

</form><br>






</x-layouts.app>