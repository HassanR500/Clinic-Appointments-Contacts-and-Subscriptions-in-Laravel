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
            <h2>Recent Contacts</h2>
            <div class="search" id="searchdiv">
                <label>
                    <input type="text" id="searchInput" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <form method="POST" action="{{ route('contacts.deleteAll') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete all contacts?')">Delete All</button>
            </form>
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
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data -->
                    @foreach ($contacts as $contact)
                    <tr>
                        <td style="text-align: left;">{{ $contact->name }}</td>
                        <td style="text-align: left;">{{ $contact->email }}</td>
                        <td style="text-align: left;">{{ $contact->phone }}</td>
                        <td style="text-align: left;">{{ $contact->department }}</td>
                        <td style="text-align: left;">{{ $contact->message }}</td>
                        <td style="text-align: left;">
                            <div class = "cardHeader" style = "justify-content:space-evenly;">
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
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
                 <p>Page {{ $currentPage }} of {{ $contacts->lastPage() }}</p>
            </div>
            <div class="col-md-6">
                <!-- Previous Button -->
            @if($contacts->currentPage() > 1)
                <a href="?page={{ $contacts->currentPage() - 1 }}" class="btn">Previous</a>
            @endif
            
            <!-- Next Button -->
            @if($contacts->hasMorePages())
                <a href="?page={{ $contacts->currentPage() + 1 }}" class="btn">Next</a>
            @endif
            </div>
        </div>
    </div>
</div>



@endsection

