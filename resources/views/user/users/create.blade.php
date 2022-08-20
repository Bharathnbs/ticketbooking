@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif

<form action="{{route('user.users.store')}}" method="post">
    @csrf
    <label >User name</label><br>
    <input type="text" name="name"><br>
    <label >Email id</label><br>
    <input type="email" name="email"><br>
    <label >password</label><br>
    <input type="password" name="password" ><br>
    <label >Phone Number</label><br>
    <input type="text" name="phone"><br>
    <input type="submit" value="submit">
</form>