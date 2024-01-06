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
}
</style>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Available Users</h2>
            <div class="search" id="searchdiv">
                <label>
                    <input type="text" id="searchInput" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        
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
        <div class="table-container">
            <table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="text-align: left;">Name</th>
            <th style="text-align: left;">Email</th>
            <th style="text-align: left;">Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Table data -->
        @foreach ($users as $user)
        <tr>
            <td style="text-align: left;">{{ $user->name }}</td>
            <td style="text-align: left;">{{ $user->email }}</td>
            <td>
                <div class="cardHeader" style="justify-content: space-evenly;">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" style="background-color: red;">Delete</button>
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
                 <p>Page {{ $currentPage }} of {{ $users->lastPage() }}</p>
            </div>
            <div class="col-md-6">
                <!-- Previous Button -->
            @if($users->currentPage() > 1)
                <a href="?page={{ $users->currentPage() - 1 }}" class="btn">Previous</a>
            @endif
            
            <!-- Next Button -->
            @if($users->hasMorePages())
                <a href="?page={{ $users->currentPage() + 1 }}" class="btn">Next</a>
            @endif
            </div>
        </div>
        
    </div>
    
    
    
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Register User Here</h2>
        </div>
        <form action="{{ route('users.store') }}" method="POST">
    @csrf
     <div class="alert alert-success" id="successMessage" style="display: {{ session('success') ? 'block' : 'none' }};
    color: #155724;
    background-color: #d4edda;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;">
    {{ session('success') }}
</div>

    <div style="margin-bottom: 15px;" >
        <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
        <input type="text"   id="name" name="name" style="padding: 8px; width: 100%; border-radius:30px;" required>
        @error('name')
            <div style="color: red; font-size: 12px;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px; ">Email:</label>
        <input type="email" id="email" name="email" style="padding: 8px; width: 100%; border-radius:30px;" required>
        @error('email')
            <div style="color: red; font-size: 12px;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px;">
        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="password" id="password" name="password" style="padding: 8px; width: 100%; border-radius:30px;" required>
        @error('password')
            <div style="color: red; font-size: 12px;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px;">
        <label for="password_confirmation" style="display: block; margin-bottom: 5px;">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" style="padding: 8px; width: 100%; border-radius:30px;" required>
        @error('password_confirmation')
            <div style="color: red; font-size: 12px; border-radius:30px;">{{ $message }}</div>
        @enderror
    </div>
    <div class = "cardHeader" style = " display: flex;
    justify-content: center;
    align-items: center;">
        <button class="btn" type="submit" style = "padding: 10px 20px; margin-top:15px; cursor: pointer;
   ">Create User</button>
    </div>
</form>
    </div>
    
    
    
    
    
</div>



@endsection

