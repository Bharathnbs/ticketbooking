<table>
    <thead>
        <tr>
            <th>id</th>
            <th>user id</th>
            <th>theatre name</th>
            <th>movie name</th>
            <th>quantity</th>
            <th>total price</th>
            <th>opration</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($bookings as $booking)
        <tr>
            <td>{{$booking->id}}</td>
            <td>{{$booking->user->name}}</td>
            <td>{{$booking->theatre->name}}</td>
            <td>{{$booking->movie->name}}</td>
            <td>{{$booking->quantity}}</td>
            <td>{{$booking->total_price}}</td>
           <td><a href="{{route('admin.bookings.delete', $booking->id)}}">delete</a> </td> 
        </tr>
        @endforeach
    </tbody>
</table>