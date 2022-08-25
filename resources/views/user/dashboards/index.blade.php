<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user dashboard</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body style="background-color:#0000">
        <h1>wellcome to cinimas</h1>
        <h2>All movies</h2><br>
        <table>
            <tr>
                @foreach($movies as $movie)
                    <td style="text-align:center;"> <img src="/images/{{$movie->images}}" style="width:100px;" ><br><a href="{{route('user.bookings.create',$movie->id)}}">{{$movie->name}}</a> <h4>{{$movie->genres}}<h4> <h6>{{$movie->time}}</h6></td>
                @endforeach
            </tr>
        </table><hr>
        <h2>Action And Drama</h2>
        <table>
            <tr>
                @foreach($genres as $genre)
                    <td> <img src="/images/{{$genre->images}}" style="width:100px;" ><br> <a href="#">{{$movie->name}}</a> <h4>{{$genre->genres}}<h4> <h6>{{$movie->time}}</h6></td>
                @endforeach    
            </tr>
        </table>
        <a href="{{route('user.logout')}}">logout</a>
        <a href="{{route('user.users.create')}}">Register</a>
    </body>
</html>
