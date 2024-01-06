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
            <h2>Recent Subscriptions</h2>
            <div class="search" id="searchdiv">
                <label>
                    <input type="text" id="searchInput" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <form method="POST" action="{{ route('subscriptions.deleteAll') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete all subscriptions?')">Delete All</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data -->
                    @foreach ($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->email }}</td>
                        <td>
                            <div class = "cardHeader" style = "justify-content:space-evenly;">
                            <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" style = "background-color:red;">Unsubscribe this subscriber</button>
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
                 <p>Page {{ $currentPage }} of {{ $subscriptions->lastPage() }}</p>
            </div>
            <div class="col-md-6">
                <!-- Previous Button -->
            @if($subscriptions->currentPage() > 1)
                <a href="?page={{ $subscriptions->currentPage() - 1 }}" class="btn">Previous</a>
            @endif
            
            <!-- Next Button -->
            @if($subscriptions->hasMorePages())
                <a href="?page={{ $subscriptions->currentPage() + 1 }}" class="btn">Next</a>
            @endif
            </div>
        </div>
    </div>
    
     <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Create New Subscriber Here</h2>
        </div>
        <!-- Display Error Message -->
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
<form action="{{ route('submit.subscription') }}" method="POST" class = "ajax-form-two">
								@csrf
									<div class="ajax-message"></div>
								
								<div style="margin-bottom: 15px;">
									<input type="email" name = "email" class="form-control  @error('email') is-invalid @enderror" placeholder="User Email" style="padding: 8px; width: 100%; border-radius:30px;">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							
								
								<div class = "cardHeader" style = " display: flex;
    justify-content: center;
    align-items: center;">
								<button type="submit" class="btn">Subscribe Now</button>
								 </div>
								
							</form>
    </div>
    
    
</div>



@endsection

