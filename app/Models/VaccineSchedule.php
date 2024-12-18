<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineSchedule extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'vaccine_dates'; // Change this if your table name is different

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id'; // Optional, only if your primary key is different

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'c_name',      // Child Name
        'p_username',  // Parent Username
        'name',        // Vaccine Name
        'v_date',      // Vaccine Date
        'timing',      // Timing
        'status',      // Status (Accepted/Rejected)
    ];

    // If you have timestamps in your table, you can enable this
    public $timestamps = true; // This is true by default, so you can omit it if you want
}