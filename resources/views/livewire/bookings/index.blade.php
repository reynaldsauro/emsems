


<div>
   
    <div class="container">

        <div class="row">

            <div class="col">

                <select class="form-select" wire:model.lazy="bus_name">
                    <option value="all">All</option>
                    <option value="B737-400 VIP">B737-400 VIP</option>
            <option value="Dornier 328J">Dornier 328J</option>
            <option value="Jetstream 32">Jetstream 32</option>
            <option value="CRJ 200">CRJ 200</option>
            <option value="Saab 340B">Saab 340B</option>
                </select>
            </div>
           
            <div class="col">
                <input type="text" class="form-control" placeholder="Search Passenger Name" wire:model.lazy="search">
            </div>
        </div>



    <table class="table table-hover text-center table-sm mt-4 shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="bg-dark text-white" style="font-size:15px;">
            <tr>
                <th>Pilot Name</th>
                <th>Jet Name</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>Passenger Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="" style="font-size: 13.5px;">
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->operator_name }}</td>
                    <td>{{ $booking->bus_name }}</td>
                    <td>{{ $booking->point_of_origin }}</td>
                    <td>{{ $booking->destination }}</td>
                    <td>{{ $booking->passenger_name }}</td>
                    <td>
                        <a href="{{ url('edit', ['booking' => $booking->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['booking' => $booking->id]) }}" class="btn btn-sm btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$bookings->links()}}
    </div>
       
</div>

