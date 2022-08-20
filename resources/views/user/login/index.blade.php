@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif

<form action="{{route('user.login.post')}}" method="post">
    @csrf
    <label >email</label>
    <input type="email" name="email" >
    <label >password</label>
    <input type="password" name="password" >
    <input type="submit" value="submit">
</form>