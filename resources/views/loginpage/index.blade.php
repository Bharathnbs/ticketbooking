@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
<form action="{{route('login.post')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <label >email</label><br>
    <input type="email" name="email"><br>
    <label >password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="submit">
</form>