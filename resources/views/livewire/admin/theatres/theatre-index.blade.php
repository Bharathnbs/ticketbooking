<div>
            <!-- <input type="search" name="name">
            <button class="btn btn-info">Search</button> -->
        <table class="table table-bordered table-dark">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>city name</th>
                    <th>theatre name</th>
                    <th>location name</th>
                    <th>opration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($theatres as $theatre)
                <tr>
                    <td>#{{ $theatre->id }}</td>
                    <td>{{ $theatre->location->name }}</td>
                    <td>{{ $theatre->name }}</td>
                    <td>{{ $theatre->area }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>    
</div>
