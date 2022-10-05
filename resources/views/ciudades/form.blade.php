<label for="">
    Name
    <input name="name" type="text" value="{{old('name',$city->name)}}">

    @error('name')
    <br>
        <small style="color:red">{{$message}}</small>
    @enderror
    
</label> <br>
