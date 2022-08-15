@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('locations.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label >State Name</label><br>
        <input type="text" name="state_name"><br>   
        <label >Location Name</label><br>
        <input type="text" name="location_name"><br>
        <input type="submit" value="submit">
    </form>

