<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Subscriptions;
use App\Models\Contacts;
use App\Models\User;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
        $latestAppointments = Appointments::latest()->take(10)->get();
        $thisMonthSubscribers = $this->getThisMonthSubscribers();
        $thisMonthContacts = $this->getThisMonthContacts();
        $thisMonthUsers = $this->getThisMonthUsers();
        $thisMonthAppointments = $this->getThisMonthAppointments();
        $totalAppointmentsCount = Appointments::count();
        $totalSubscriptionsCount = Subscriptions::count();
        $totalContactsCount = Contacts::count();
        $totalUserCount = User::count();

        // Prepare data for Google Charts
        $chartData = $this->prepareChartData($thisMonthSubscribers, $thisMonthContacts, $thisMonthUsers, $thisMonthAppointments);

        return view('home', [
            'totalAppointmentsCount' => $totalAppointmentsCount,
            'totalSubscriptionsCount' => $totalSubscriptionsCount,
            'totalContactsCount' => $totalContactsCount,
            'totalUserCount' => $totalUserCount,
            'latestAppointments' => $latestAppointments,
            'chartData' => $chartData,
        ]);
    }

    public function prepareChartData($subscribers, $contacts, $users, $appointments)
    {
        $currentMonth = Carbon::now()->format('M');
        $chartData = [
            ['Month', 'Subscribers', 'Contacts', 'Users', 'Appointments'],
            [$currentMonth, $subscribers, $contacts, $users, $appointments],
        ];

        return json_encode($chartData);
    }

   public function getThisMonthSubscribers()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $subscribers = Subscriptions::whereMonth('created_at', $currentMonth->month)
                                   ->whereYear('created_at', $currentMonth->year)
                                   ->get();
    
        return $subscribers->count();
    }
    
     public function getThisMonthContacts()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $monthly_contacts = Contacts::whereMonth('created_at', $currentMonth->month)
                                   ->whereYear('created_at', $currentMonth->year)
                                   ->get();
    
        return $monthly_contacts->count();
    }
    
     public function getThisMonthUsers()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $monthly_users = User::whereMonth('created_at', $currentMonth->month)
                                   ->whereYear('created_at', $currentMonth->year)
                                   ->get();
    
        return $monthly_users->count();
    }
    
     public function getThisMonthAppointments()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $monthly_appointments = Appointments::whereMonth('created_at', $currentMonth->month)
                                   ->whereYear('created_at', $currentMonth->year)
                                   ->get();
    
        return $monthly_appointments->count();
    }

}
