<?php

namespace App\Http\Controllers;

use App\Models\Child; // Import the Child model
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewRecords()
    {
        $children = Child::all(); // Fetch all child records
        return view('admin.view_records', compact('children'));
    }
}