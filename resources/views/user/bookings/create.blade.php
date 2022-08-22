@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
    <form action="#" method="post">
        @csrf
        <label >user name</label><br>
        <input type="text" name="user_id" value="{{$user->id}}">

        <label >location name</label><br>
        <select name="location_id">
            @foreach($locations as $loc)
            <option value="{{$loc->id}}">{{$loc->name}}</option>
            @endforeach
        </select><br>