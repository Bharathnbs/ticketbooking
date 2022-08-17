@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.movies.update', $movie->id)}}" method="post">
        @csrf
        <label >City Name</label><br>
        <select name="theatre_id">
            @foreach($theatres as $theatre)
            <option value="{{$theatre->id}}">{{$theatre->name}}</option>
            @endforeach
        </select><br>
        <label >Movie Name</label><br>
        <input type="text" name="name" value="{{old('name', $movie->name)}}"><br>   
        <label >genres</label><br>
        <input type="text" name="genres" value="{{old('name', $movie->genres)}}"><br>
        <label >time</label><br>
        <input type="time" name="time" value="{{old('name', $movie->time)}}"><br>
        <label >date</label><br>
        <input type="date" name="date" value="{{old('name', $movie->date)}}"><br>
        <label >price</label><br>
        <input type="text" name="price" value="{{old('name', $movie->price)}}"><br>
        <input type="submit" value="submit">
    </form>

