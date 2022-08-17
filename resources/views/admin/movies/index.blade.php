<table>
    <thead>
        <tr>
            <th> theatre name </th>
            <th> Movie name </th>
            <th> genres </th>
            <th> time </th>
            <th> date </th>
            <th> price </th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->theatres->name }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->genres }}</td>
            <td>{{ $movie->time }}</td>
            <td>{{ $movie->date }}</td>
            <td>{{ $movie->price }}</td>
            <td><a href="{{route('admin.movies.update', $movie->id)}}">edit</a> <a href="{{route('admin.movies.delete', $movie->id)}}">delete</a></td>
        </tr>
        @endforeach
        <a href="{{route('admin.movies.create')}}">movie create</a>
    </tbody>
</table>
