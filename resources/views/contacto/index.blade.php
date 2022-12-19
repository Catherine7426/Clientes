<x-layouts.app
    title="Contáctanos"
>
    <h1 style="margin-left: 50px;margin-top: 50px">Escribenos un mensaje</h1> <br> <br>

    <form style="margin-left: 50px"  action="{{route('contactanos')}}" method="POST" >
        @csrf
        
        <div  class="mb-3">
            <label for="" class="form-label">
                Nombre:
                <input name="name" type="text" class="form-control"  tabindex=1 value="">
            
                @error('name')
                <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
                
            </label> <br>

        <div  class="mb-3">
            <label for="" class="form-label">
                Email:
                <input name="email" type="text" class="form-control"  tabindex=1 value="">
                
                @error('email')
                <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
                    
            </label> <br> 

        <div  class="mb-3">
            <label for="" class="form-label">
                Mensaje:
                <textarea name="mensaje" class="form-control"  rows="4"></textarea>
                    
                @error('mensaje')
                <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
                        
            </label> <br> 

            
            <button class="btn btn-primary" type="submit">Enviar mensaje</button>
    

   </form>

   @if (session('estado'))
   <script>
    alert("{{session('estado')}}");
   </script>
       
   @endif

</x-layouts.app>