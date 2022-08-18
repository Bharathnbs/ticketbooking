@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.movies.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label >City Name</label><br>
        <select name="theatre_id">
            @foreach($theatres as $theatre)
            <option value="{{$theatre->id}}">{{$theatre->name}}</option>
            @endforeach
        </select><br>
        <label >Movie Name</label><br>
        <input type="text" name="name"><br>   
        <label >genres</label><br>
        <input type="text" name="genres"><br>
        <label >time</label><br>
        <input type="time" name="time"><br>
        <label >date</label><br>
        <input type="date" name="date"><br>
        <label >price</label><br>
        <input type="text" name="price"><br>
        <label >image</label><br>
        <input type="file" name="images"><br>
        <input type="submit" value="submit">
    </form>

