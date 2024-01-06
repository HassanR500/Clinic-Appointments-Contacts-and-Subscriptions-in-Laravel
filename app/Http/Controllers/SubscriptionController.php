<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriptions;
use App\Models\Appointments;
use App\Models\Contacts;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create','store']);
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
        $subscriptions = Subscriptions::orderBy('created_at', 'desc')->paginate($perPage, ['*'], 'page', $currentPage);
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();


        return view('backend.subscriptions.index', compact('subscriptions','totalAppointmentsCount','totalSubscriptionsCount','totalContactsCount','totalUserCount','currentPage'));
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
                'email' => 'required|email|unique:subscriptions,email',
            ]);
            
            $subscription = Subscriptions::create($validatedData);
            // Check if the user is logged in
            if (auth()->check()) {
                // Create a new subscription for logged-in users
                session()->flash('success', 'Subscribed successfully!');
                return redirect()->back();
            } else {
                // If not logged in and validation passes, return a normal response
                return response()->json(['status' => 1, 'message' => 'Subscribed successfully!', 'subscription' => $subscription]);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            
            // Check if the user is logged in
            if (auth()->check()) {
                // If logged in and validation fails, return a normal error message
                session()->flash('error', 'User Already Subscribed.');
                return redirect()->back();
            } else {
                // If not logged in and validation fails, return a JSON response
                return response()->json([
                    'status' => 0,
                    'message' => 'User Already Subscribed.',
                ]);
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
        $subscription = Subscriptions::findOrFail($id);
        $subscription->delete();

        return redirect()->back()->with('success', 'Subscriber removed successfully');
    }
    
    /**
     * Remove all appointments from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAllSubscriptions()
    {
        try {
            // Fetch all appointments
            $subscriptions = Subscriptions::get();

            // Check if appointments are fetched successfully
            if ($subscriptions->isNotEmpty()) {
                foreach ($subscriptions as $subscription) {
                    $deleted = $subscription->delete();
                    if (!$deleted) {
                        return redirect()->route('subscription-new')->with('error', 'Failed to delete Subscriptions');
                    }
                }
                return redirect()->route('subscription-new')->with('success', 'All subscriptions have been deleted!');
            } else {
                return redirect()->route('subscription-new')->with('error', 'No Subscriptions found to delete!');
            }
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            dd($e->getMessage());
        }
    }

}
