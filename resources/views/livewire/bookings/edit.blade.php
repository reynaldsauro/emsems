
<div>
    <div class="container">
    <div class="card">
     <div class="card-header">
         <h3>Edit Booking</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='operator_name'>
             <label for="operator_name">Pilot Name</label>
             @error('operator_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         {{-- <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.debounce.500ms='bus_name'>
             <label for="bus_name">Jet Name</label>
             @error('bus_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div> --}}
 
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='point_of_origin'>
             <label for="point_of_origin">Depature</label>
             @error('point_of_origin')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='destination'>
             <label for="destination">Destination</label>
             @error('destination')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='passenger_name'>
            <label for="passenger_name">Passenger Name</label>
            @error('passenger_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
 
         <div class="form-floating mb-3">
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
          <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-between">
           
            <button class="btn btn-danger mx-2" wire:click="back()">
                Back
            </button>

            <button class="btn btn-success" wire:click="editBooking()">
                Save Changes
            </button>
        </div>
     </div>
    </div>
 </div>
 
</div>
