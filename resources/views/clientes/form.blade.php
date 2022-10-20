

<div  class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name"  name="name" type="text" class="form-control"  tabindex=1 value="{{old('name',$client->name)}}">
        @error('name')
        <br>
        <small style="color:red">{{$message}}</small>
        @enderror
</div>

<div  class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <select class="form-select" name="city_id" id="" >
    @foreach ($cities as $city)
        <option value="{{$city['id']}}" @if ($city->id == $client->city_id) selected @endif>{{$city['name']}}</option>
        @endforeach
        @error('city_id') 
        <br>
            <small style="color:red">{{$message}}</small>
        @enderror    
    </select>
</div>






