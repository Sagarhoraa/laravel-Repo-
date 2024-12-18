<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        // Retrieve children with pending vaccine requests
        $children = Child::where('status', 'pending')->get();

        // Return the view with the children data
        return view('admin.approve_vaccine', compact('children'));
    }

    public function approveVaccine(Request $request)
    {
        $child = Child::where('c_name', $request->child_name)->first();
        $child->status = Child::STATUS_APPROVED; // Use the constant
        $child->save();
    
        return redirect()->back()->with('success', 'Vaccine request approved');
    }
    
    public function rejectVaccine(Request $request)
    {
        $child = Child::where('c_name', $request->child_name)->first();
        $child->status = Child::STATUS_REJECTED; // Use the constant
        $child->save();
    
        return redirect()->back()->with('success', 'Vaccine request rejected');
    }
    
}
