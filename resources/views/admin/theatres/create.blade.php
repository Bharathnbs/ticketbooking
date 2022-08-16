@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.theatres.store')}}" method="post">
        @csrf
        <label >City Name</label><br>
        <select name="location_id">
            @foreach($location as $loc)
            <option value="{{$loc->id}}">{{$loc->name}}</option>
            @endforeach
        </select><br>
        <label >Theatre Name</label><br>
        <input type="text" name="name"><br>   
        <label >area Name</label><br>
        <input type="text" name="area"><br>
        <input type="submit" value="submit">
    </form>

