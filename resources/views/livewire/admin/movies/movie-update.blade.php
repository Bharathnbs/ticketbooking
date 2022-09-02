<div>
    <div class="card" style="width:30%; margin-left:500px; margin-top:20px; padding-bottom:20px;">
        <div class="card-header" style="background-color:red"><h2 style="color:white; margin-left:100px;">Movie Update</h2></div>
        <div class="card-body">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                </div>
            @endif
            <form action="{{route('admin.movies.update', $movie->id)}}" method="post" enctype="multipart/form-data" class="form">
                @csrf
                <label >City Name</label><br>
                <select name="theatre_id" class="form-control">
                    @foreach($theatres as $theatre)
                    <option value="{{$theatre->id}}">{{$theatre->name}}</option>
                    @endforeach
                </select><br>
                <label >Movie Name</label><br>
                <input type="text" name="name" value="{{old('name', $movie->name)}}" class="form-control"><br>   
                <label >genres</label><br>
                <input type="text" name="genres" value="{{old('name', $movie->genres)}}"  class="form-control"><br>
                <label >time</label><br>
                <input type="time" name="time" value="{{old('name', $movie->time)}}"  class="form-control"><br>
                <label >date</label><br>
                <input type="date" name="date" value="{{old('name', $movie->date)}}"  class="form-control"><br>
                <label >price</label><br>
                <input type="text" name="price" value="{{old('name', $movie->price)}}"  class="form-control"><br>
                <input type="file" name="images" class="form-control"><br>

                <input type="submit" value="submit" class="btn btn-primary" style="margin-left:170px;">
            </form>
        </div>
    </div>
</div>
