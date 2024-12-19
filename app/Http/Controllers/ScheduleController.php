<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VaccineDate; 
// Assuming you have a VaccineSchedule model
use App\Models\Child;

class ScheduleController extends Controller
{
    public function viewSchedule(Request $request)
    {
        $username = $request->user()->name;  // Check if username is fetched correctly
        \Log::info('Logged-in username: ' . $username);
    
        $schedules = Child::where('p_username', $username)
                         ->whereIn('status', values: ['approved'])
                         ->get();
    
        // Log the children fetched
        \Log::info('Fetched children: ' . $schedules);
    
        return view('parent.view_schedule', [
            'schedules' => $schedules,
            'p_name' => $request->user()->name,
        ]);
    }
}
