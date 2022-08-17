@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.bookings.store')}}" method="post">
        @csrf
        <label >user name</label><br>
        <select name="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>

        <label >location name</label><br>
        <select name="location_id">
            @foreach($locations as $loc)
            <option value="{{$loc->id}}">{{$loc->name}}</option>
            @endforeach
        </select><br>

        <label >theatre name</label><br>
        @if($theatres->location_id == $)
        <select name="theatre_id">
            @foreach($theatres as $theatre)
            <option value="{{$theatre->id}}">{{$theatre->name}}</option>
            @endforeach
        </select><br>

        <label >Movie name</label><br>
        <select name="movie_id">
            @foreach($movies as $movie)
            <option value="{{$movie->id}}">{{$movie->name}}</option>
            @endforeach
        </select><br>

        <label >quantity</label>
        <input type="number" name="quantity">

        <label >total price</label>
        <input type="text" name="quantity">

        <input type="submit" value="submit">
    </form>

