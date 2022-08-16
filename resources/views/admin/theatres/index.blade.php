<table>
    <thead>
        <tr>
            <th>city name</th>
            <th>theatre name</th>
            <th>location name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($theatres as $theatre)
        <tr>
            <td>{{ $theatre->location->name }}</td>
            <td>{{ $theatre->name }}</td>
            <td>{{ $theatre->area }}</td>
            <td><a href="{{ route('admin.theatres.update',$theatre->id)}}">edit</a> <a href="{{route('admin.theatres.delete',$theatre->id)}}">delete</a></td>
        </tr>
        @endforeach
        <a href="{{route('admin.theatres.create')}}">theatre create</a>
    </tbody>
</table><hr>
