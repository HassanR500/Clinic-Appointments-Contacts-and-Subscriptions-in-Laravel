<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Subscriptions;
use App\Models\Contacts;
use App\Models\User;
use DB;
class AppointmentController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth')->except( 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 6; // Number of items per page
        $currentPage = request()->has('page') ? request()->input('page') : 1;
        $appointments = Appointments::orderBy('created_at', 'desc')->paginate($perPage, ['*'], 'page', $currentPage);
        
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();
        return view('backend.appointments.index', compact(
            'appointments',
            'totalAppointmentsCount',
            'totalSubscriptionsCount',
            'totalContactsCount',
            'totalUserCount',
            'currentPage'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'department' => 'required',
                'doctor' => 'required',
                'name' => 'required',
                'phone' => 'required|numeric|unique:appointments,phone',
                'appointment_date' => 'required|date',
            ]);
    
            $appointment = Appointments::create($validatedData);
    
            if (auth()->check()) {
                session()->flash('success', 'Appointment created successfully!');
                return redirect()->back();
            } else {
                return response()->json(['status' => 1, 'message' => 'Appointment created successfully!', 'appointment' => $appointment]);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            if (auth()->check()) {
                session()->flash('error', 'Appointment creation failed. Please try again.');
                return redirect()->back();
            } else {
                return response()->json(['status' => 0, 'message' => 'Failed to create an appointment. Please try again.']);
            }
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointments::findOrFail($id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully');
    }
    
     /**
     * Remove all appointments from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAllAppointments()
    {
        try {
            // Fetch all appointments
            $appointments = Appointments::get();
    
            // Check if appointments are fetched successfully
            if ($appointments->isNotEmpty()) {
                foreach ($appointments as $appointment) {
                    $deleted = $appointment->delete();
                    if (!$deleted) {
                        return redirect()->route('appointments-new')->with('error', 'Failed to delete appointments');
                    }
                }
                return redirect()->route('appointments-new')->with('success', 'All appointments deleted successfully!');
            } else {
                return redirect()->route('appointments-new')->with('error', 'No appointments found to delete');
            }
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            dd($e->getMessage());
        }
    }
}
