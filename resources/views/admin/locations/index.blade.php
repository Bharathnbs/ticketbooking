<table>
    <thead>
        <tr>
            <th>location name</th>
            <th>state name</th>
            <th>opration</th>
        </tr>
    </thead>
    <tbody>
        @foreach($locations as $loc)
        <tr>
            <td>{{$loc->name}}</td>
            <td>{{$loc->state}}</td>
            <td><a href="{{route('admin.locations.update',$loc->id)}}">edit</a> <a href="{{route('admin.locations.delete',$loc->id)}}">delete</a></td>
        </tr>
        @endforeach
        <a href="{{route('admin.locations.create')}}">location create</a>
    </tbody>
</table>