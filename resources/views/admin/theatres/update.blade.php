@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.theatres.update',$theatre->id)}}" method="post" >
        @csrf
        <label >City Name</label><br>
        <select name="location_id">
            @foreach($location as $loc)
            <option value="{{$loc->id}}">{{$loc->name}}</option>
            @endforeach
        </select><br>
        <label >State Name</label><br>
        <input type="text" name="name" value="{{ old( 'name', $theatre->name )}}"><br>   
        <label >Location Name</label><br>
        <input type="text" name="area" value="{{old( 'area', $theatre->area)}}"><br>
        <input type="submit" value="submit">
    </form>