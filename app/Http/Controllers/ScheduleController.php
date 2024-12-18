<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VaccineDate; // Assuming you have a VaccineSchedule model

class ScheduleController extends Controller
{
    public function viewSchedule(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
        }
    
        $p_name = Auth::user()->name; // Get the logged-in parent's name
    
        // Fetch vaccine schedules for the logged-in parent
        $schedules = VaccineDate::where('p_username', $p_name)
        ->whereIn('status', values: ['approved', 'pending','rejected'])
         ->get();
    
        return view('parent.view_schedule',[
        'schedules'=>$schedules,
        ]);
    }
}