<h1>wellcome to cinimas</h1>
<h2>All movies</h2>
<table>
    <tr>
@foreach($movies as $movie)
   <td> <img src="/images/{{$movie->images}}" style="width:100px;" ><br><a href="#">{{$movie->name}}</a> <h4>{{$movie->genres}}<h4> <h6>{{$movie->time}}</h6></td>
 @endforeach
    </tr>

</table>
<h2>Action And Drama</h2>
<table>
    <tr>
        @foreach($genres as $genre)
            <td> <img src="/images/{{$genre->images}}" style="width:100px;" ><br> <a href="#">{{$movie->name}}</a> <h4>{{$genre->genres}}<h4> <h6>{{$movie->time}}</h6></td>
        @endforeach    
    </tr>
</table>