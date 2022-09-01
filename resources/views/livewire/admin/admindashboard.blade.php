 <div>
    <a  class="btn btn-primary" wire:click="logout">Logout</a>

    <div class="content">

            <div class="card" style="width:20%; height:250px;margin-bottom:20px; margin-left:50px; margin-top:20px;">
                <a href="{{route('admin.location_index')}}">location page</a><br>
            </div>  
            <div class="card" style="width:20%; height:250px;margin-bottom:20px; margin-left:50px;">
                <a href="{{route('admin.theatres.index')}}">theatre page</a><br>
            </div>  
            <div class="card" style="width:20%; height:250px;margin-bottom:20px; margin-left:50px;">
                <a href="{{route('admin.movies.index')}}">movies page</a><br>
            </div>
            <div class="card" style="width:20%; height:250px;margin-bottom:20px; margin-left:50px;">
                <a href="{{route('admin.bookings.index')}}">bookings page</a><br>
            </div>
    </div>

 </div>

