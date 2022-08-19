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
        <select name="theatre_id">
            @foreach($theatres as $theatre)
            <option value="{{$theatre->id}}">{{$theatre->name}}</option>
            @endforeach
        </select><br>

        <label >movie name</label><br>
        <select name="movie_id">
            @foreach($movies as $movie)
            <option value="{{$movie->id}}">{{$movie->name}}</option>
            @endforeach
        </select><br> 

        <label >quantity</label><br>
        <input id="quantity" type="number" name="quantity"><br>

        <label >price</label><br>
        @foreach($movies as $movie)
        <input id="price" type="text" name="price" value="{{$movie->price}}"><br>
        @endforeach
        <label > total price</label><br>
        <input type="text" name="total" id="total"><br>
        <input type="submit" value="booking">
    
    </form>

<script>
    var quantity = document.getElementById('quantity').value = 2;
    console.log(quantity);
    var price = document.getElementById('price').value ;
    document.getElementById('total').value = price * quantity;
</script>