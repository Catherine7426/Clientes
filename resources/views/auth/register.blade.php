<x-layouts.app
    title="Registro"
>

    <h1 style="margin-left:45%;margin-top: 50px" >Registrate</h1>

    
    <form class="form-floating" method="POST" action="{{route ('registro')}}">
    @csrf

    <div class="form-floating mb-3 ">
    <label for="floatingInputValue">
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

    

    {{-- <label >
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
                
        {{-- @error('client_id')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror  
        
    </label><br> --}}
    <div class="form-floating mb-3 ">
    <label >
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

<div class="form-floating mb-3 ">
    <label>
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

<div class="form-floating mb-3 ">
<label  >
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


<a href="{{route('login')}}">Login</a>
    
<div class="flex items-center justify-between">

{{-- <a href="{{route('login')}}">REGISTRO</a> --}}
    <button type="submit">REGISTRAR</button>

</div>

</form>








</x-layouts.app>