@extends('layouts.backend.app')
@section('content')
<style>

      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: white;
         justify-content: center;
         align-items: center;
        width:100%;
    }

    .details {
        display: block;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        overflow-x: auto;
        width:50%;
        margin-left:25%;
    }
    
    
    @media screen and (max-width: 768px) {
    .details {
        width: 100%; /* Make width full for smaller screens */
        margin-left: 0; /* Reset the left margin for smaller screens */
    }

</style>
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2 >Edit User</h2>
        </div>
       
        <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PATCH')
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
    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
        <input type="text" id="name" name="name" style="padding: 8px; width: 100%;" value = "{{ $user->name }}" >
        @error('name')
            <div style="color: red; font-size: 12px;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
        <input type="email" id="email" name="email" style="padding: 8px; width: 100%;" value="{{ $user->email }}">
        @error('email')
            <div style="color: red; font-size: 12px;">{{ $message }}</div>
        @enderror
    </div>
    <div class = "cardHeader">
        <button type="submit" style="padding: 8px 20px; background-color: #3490dc; color: white; border: none; cursor: pointer;">Update User</button>
    <a href="{{ route('users.index') }}" style="margin-left: 10px; padding: 8px 20px; background-color: #6c757d; color: white; text-decoration: none;">Go Back</a>
    </div>
</form>
    </div>
</div>

@endsection