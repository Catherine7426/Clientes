<label for="">
    Name
    <input name="name" type="text" value="{{old('name',$client->name)}}">

    @error('name')
    <br>
        <small style="color:red">{{$message}}</small>
    @enderror
    
</label> <br>
<label for="">
    Ciudad

    
    <select name="city_id" id="" >
    

        @foreach ($cities as $city)
        <option value="{{$city['id']}}" @if ($city->id == $client->city_id) selected @endif>{{$city['name']}}</option>
        @endforeach
        @error('city_id') 
        <br>
            <small style="color:red">{{$message}}</small>
        @enderror    
        
    </select>
    
</label><br>