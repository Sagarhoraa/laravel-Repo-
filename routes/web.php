<?php

use App\Http\Controllers\ProfileController;
// Adjusted to the correct namespace
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
    });

//----------------------------------PARENT-------------------------------------------------------------------------------------------------
Route::get('/parentdashboard', function () {
    return view('parent.parent_dashboard');
    })->middleware(['auth', 'verified','rolemanager:parent'])->name('parentdashboard');


// Route to display the add child form
Route::get('/addchild', function () {
    return view('parent.add_child'); })
    ->middleware(['auth', 'verified'])
    ->name('add.child');

// Route to handle the form submission
Route::post('/addchild', [ChildController::class, 'store'])
    ->name('addchild')
    ->middleware(['auth', 'verified']);
   

Route::get('/children', [ChildController::class, 'index'])->name('children.index');
Route::post('/children', [ChildController::class, 'store'])->name('children.store');
Route::get('/view-child-records', [ChildController::class, 'viewRecords'])
    ->middleware(['auth', 'verified'])
    ->name('viewChildRecords');    


Route::get('/viewrecord', [ChildController::class, 'viewRecords'])
    ->middleware(['auth', 'verified'])
    ->name('viewrecord');



Route::get('/viewschedule', [ScheduleController::class, 'viewSchedule'])
    ->middleware(['auth', 'verified'])
    ->name('viewschedule');

//----------------------------------ADMIN-------------------------------------------------------------------------------------------------
  // Admin Routes
  Route::get('/approve-vaccine', [VaccineController::class, 'index'])->name('approve.vaccine.index');
  Route::post('/approve-vaccine', [VaccineController::class, 'approveVaccine'])->name('approve.vaccine');
  Route::post('/reject-vaccine', [VaccineController::class, 'rejectVaccine'])->name('reject.vaccine');

 

Route::get('/addvaccine', function () {
    return view('admin.add_vaccine');
    })->middleware(['auth', 'verified'])->name('addvaccine');


Route::get('/admindashboard', function () {
    return view('admin.admin_dashboard');
    })->middleware(['auth', 'verified','rolemanager:admin'])
    ->name('admindashboard');



Route::get('/allocatevaccineform', function () {
    return view('admin.allocate_vaccine');
    })->middleware(['auth', 'verified'])
    ->name('vaccine.allocate');

// POST route to handle the form submission
Route::post('/allocatevaccine', [VaccineController::class, 'allocate'])
    ->middleware(['auth', 'verified'])
    ->name('vaccine.allocate');


    
    Route::get('/viewrecords', [AdminController::class, 'viewRecords'])
    ->middleware(['auth', 'verified'])
    ->name('viewrecords');

Route::get('/viewscheduleadmin', function () {
    return view('admin.view_schedule');
    })->middleware(['auth', 'verified'])->name('viewscheduleadmin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


