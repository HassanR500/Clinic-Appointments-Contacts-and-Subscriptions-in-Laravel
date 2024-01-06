<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Appointments;
use App\Models\Subscriptions;
use App\Models\User;
class ContactController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->except('store');
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
        $contacts = Contacts::orderBy('created_at', 'desc')->paginate($perPage, ['*'], 'page', $currentPage);
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();

        return view('backend.contacts.index', compact(
            'contacts',
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
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'department' => 'required',
            'message' => 'required',
        ]);

        // Create a new appointment using the model
        $contact = Contacts::create($validatedData);

    if ($contact) {
        return response()->json(['status' => 1, 'message' => 'Message sent successfully!', 'appointment' => $contact]);
    } else {
        return response()->json(['status' => 0, 'message' => 'Failed to send your message. Please try again.']);
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
        $contact = Contacts::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
    
    /**
     * Remove all contacts from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAllContacts()
    {
        try {
            // Fetch all contacts
            $contacts = Contacts::get();

            // Check if contacts are fetched successfully
            if ($contacts->isNotEmpty()) {
                foreach ($contacts as $contact) {
                    $deleted = $contact->delete();
                    if (!$deleted) {
                        return redirect()->route('contact-new')->with('error', 'Failed to delete Contacts');
                    }
                }
                return redirect()->route('contact-new')->with('success', 'All Contacts have been deleted!');
            } else {
                return redirect()->route('contact-new')->with('error', 'No Contacts found to delete!');
            }
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            dd($e->getMessage());
        }
    }

}
