<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Subscriptions;
use App\Models\Contacts;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 5; // Number of items per page
        $currentPage = request()->has('page') ? request()->input('page') : 1;
        $users = User::paginate($perPage, ['*'], 'page', $currentPage);
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();
        return view('backend.users.index', compact('users','totalAppointmentsCount','totalSubscriptionsCount','totalContactsCount','totalUserCount','currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();
        return view('backend.users.create', compact('totalAppointmentsCount','totalSubscriptionsCount','totalContactsCount','totalUserCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate incoming request data
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Create a new user instance
        $user = new User([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Save the user to the database
        $user->save();

       return redirect()->back()->with('success', 'User created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); // Retrieve the user by ID
        
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();
        return view('backend.users.edit', compact('totalAppointmentsCount','totalSubscriptionsCount','totalContactsCount','totalUserCount','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); // Retrieve the user by ID

        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);
    
        // Update the user with validated data
        $user->update($validatedData);
    
        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');

    }
}
