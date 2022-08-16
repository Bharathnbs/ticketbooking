@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="{{route('admin.locations.store')}}" method="post">
        @csrf
        <label >State Name</label><br>
        <input type="text" name="state"><br>   
        <label >Location Name</label><br>
        <input type="text" name="name"><br>
        <input type="submit" value="submit">
    </form>

