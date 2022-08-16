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
            <td>{{$loc->location_name}}</td>
            <td>{{$loc->state_name}}</td>
            <td><a href="#">edit</a> <a href="#">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
