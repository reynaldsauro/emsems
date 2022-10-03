<div>
   <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-header text-center">
        <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Booking Form</h3>
    </div>
    <div class="card-body">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" wire:model.defer='operator_name'>
            <label for="operator_name">Pilot Name</label>
            @error('operator_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" wire:model.defer='point_of_origin'>
            <label for="point_of_origin">Depature</label>
            @error('point_of_origin')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" wire:model.defer='destination'>
            <label for="destination">Destination</label>
            @error('destination')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" wire:model.defer='passenger_name'>
            <label for="passenger_name">Passenger Name</label>
            @error('passenger_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        
        <div class="form-floating mb-2">
            <input type="text" class="form-control" wire:model.debounce.500ms='email'>
            <label for="email">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>


        <div class="form-floating mb-2">
           <select name="bus_name" class="form-select" wire:model.defer='bus_name'>
            <option hidden="true">Select Jet</option>
            <option selected disabled>Select Jet</option>
            <option value="B737-400 VIP">B737-400 VIP</option>
            <option value="Dornier 328J">Dornier 328J</option>
            <option value="Jetstream 32">Jetstream 32</option>
            <option value="CRJ 200">CRJ 200</option>
            <option value="Saab 340B">Saab 340B</option>
           </select>
           <label for="bus_name">Jet Name</label>
           @error('bus_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
         <div class="form-group mb-2 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-success bg-dark text-white" type="submit" wire:click='addBooking()'>
                Add Booking
            </button>
         </div>
    </div>
   </div>
</div>
