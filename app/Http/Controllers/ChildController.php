<?php

namespace App\Http\Controllers;

use App\Models\Child; // Import the Child model
use Illuminate\Http\Request;


class ChildController extends Controller
{
    // Method to display the list of child records
    public function index()
    {
        $children = Child::all();
        return view('add_vaccine', compact('children'));
    }

   
    public function store(Request $request)
    {
     
 
        // Validate the request data
        $request->validate([
            'c_name' => 'required|string|max:255',
            'c_gender' => 'required|string',
            'c_city' => 'required|string',
            'c_birth' => 'required|date',
            'c_age' => 'required|integer',
            'c_weight' => 'required|integer',
            'c_height' => 'required|integer',
            'c_vaccine' => 'required|string',
            'p_username' => 'required|string',
            'p_email' => 'required|email',
            'status' => 'nullable|string',
            'scheduled_date' => 'nullable|date',
        ]);
 
     
        // Create a new child record
        Child::create($request->all());
 
        // Redirect back with a success message
        return redirect()->route('add.child')->with('success', 'Child record created successfully.');
    }

    // Method to delete a child record
    public function destroy($id)
    {
        $child = Child::findOrFail($id);
        $child->delete();
        return redirect()->route('children.index')->with('success', 'Record deleted successfully');
    }

    // Method to display child records for the logged-in parent
    public function viewRecords(Request $request)
{
    $username = $request->user()->name;  // Check if username is fetched correctly
    \Log::info('Logged-in username: ' . $username);

    $children = Child::where('p_username', $username)
                     ->whereIn('status', values: ['approved', 'pending','rejected'])
                     ->get();

    // Log the children fetched
    \Log::info('Fetched children: ' . $children);

    return view('parent.view_record', [
        'children' => $children,
        'p_name' => $request->user()->name,
    ]);
}

    
    
}