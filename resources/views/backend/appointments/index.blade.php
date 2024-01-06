@extends('layouts.backend.app')
@section('content')
<style>
     body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: white;
    }

    th, td {
        padding: 8px;
        text-align: left;
        word-wrap: break-word;
    }

    th {
        background-color: #2a2185;
        color: white;
    }
   @media screen and (max-width: 768px) {
  .search {
    display: none;
    
  }
</style>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Recent Appointments</h2>
            <div class="search" id="searchdiv">
                <label>
                    <input type="text" id="searchInput" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
             <form method="POST" action="{{ route('appointments.deleteAll') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete all appointments?')">Delete All</button>
            </form>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Doctor</th>
                        <th>Patient Name</th>
                        <th>Phone</th>
                        <th>Appointment Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data -->
                    @foreach ($appointments as $appointment)
                    <tr>
                        <td style="text-align: left;">{{ $appointment->department }}</td>
                        <td style="text-align: left;">{{ $appointment->doctor }}</td>
                        <td style="text-align: left;">{{ $appointment->name }}</td>
                        <td style="text-align: left;">{{ $appointment->phone }}</td>
                        <td style="text-align: left;">{{ $appointment->appointment_date }}</td>
                        <td style="text-align: left;">
                            <div class = "cardHeader" style = "justify-content:space-evenly;">
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" style = "background-color:red;">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination info -->
        <div class="row cardHeader" style="margin-top: 20px; justify-content: space-between;">
            <div class="col-md-6"">
                 <p>Page {{ $currentPage }} of {{ $appointments->lastPage() }}</p>
            </div>
            <div class="col-md-6">
                <!-- Previous Button -->
            @if($appointments->currentPage() > 1)
                <a href="?page={{ $appointments->currentPage() - 1 }}" class="btn">Previous</a>
            @endif
            
            <!-- Next Button -->
            @if($appointments->hasMorePages())
                <a href="?page={{ $appointments->currentPage() + 1 }}" class="btn">Next</a>
            @endif
            </div>
        </div>
    </div>
    
    
     <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Create Appointment Here</h2>
        </div>
        @if(session('error'))
    <div class="alert alert-danger" id="errorMessage" style="display: {{ session('error') ? 'block' : 'none' }};
        color: #721c24;
        background-color: #f8d7da;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;">
        {{ session('error') }}
    </div>
@endif

 @if(session('success'))
   <div class="alert alert-success" id="successMessage" style="display: {{ session('success') ? 'block' : 'none' }};
    color: #155724;
    background-color: #d4edda;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;">
    {{ session('success') }}
</div>
@endif
<form action="{{ route('submit.appointment') }}" method="POST" class = "ajax-form-two">

								@csrf
									<div class="ajax-message"></div>
								<div style="margin-bottom: 15px;">
									<select  name = "department" class="form-select" style="padding: 8px; width: 100%; border-radius:30px;">
										<option selected>Select Department</option>
										<option value="One">One</option>
										<option value="Two">Two</option>
										<option value="Three">Three</option>
									</select>
									
								</div>
								<div style="margin-bottom: 15px;">
									<select class="form-select " name = "doctor" style="padding: 8px; width: 100%; border-radius:30px;">
										<option selected>Select Doctor</option>
										<option value="One">One</option>
										<option value="Two">Two</option>
										<option value="Three">Three</option>
									</select>
								</div>
								<div style="margin-bottom: 15px;">
									<input type="text" name = "name" class="form-control  @error('name') is-invalid @enderror" placeholder="Your Name" style="padding: 8px; width: 100%; border-radius:30px;">
									@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div style="margin-bottom: 15px;">
									<input type="number" name = "phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Numbers" style="padding: 8px; width: 100%; border-radius:30px;">
									@error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div style="margin-bottom: 15px;">
									<input type="date" class="form-control @error('appointment_date') is-invalid @enderror" name = "appointment_date" style="padding: 8px; width: 100%; border-radius:30px;">
									@error('appointment_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								
								<div class = "cardHeader" style = " display: flex;
    justify-content: center;
    align-items: center;">
								<button type="submit" class="btn">Appointment Now</button>
								 </div>
								
							</form>
    </div>
    
    
    
    
</div>



@endsection

