

<div  class="mb-3">
<label for="" class="form-label">
    Nombre de la ciudad
    <input name="name" type="text" class="form-control"  tabindex=1 value="{{old('name',$city->name)}}">

    @error('name')
    <br>
        <small style="color:red">{{$message}}</small>
    @enderror
    
</label> <br>
