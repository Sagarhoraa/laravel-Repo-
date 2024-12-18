<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineAllocation extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'vaccine_allocations';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'c_name',
        'p_username',
        'name',
        'v_date',
        'timing',
        'status',
    ];

    // If you have timestamps in your table, you can specify this
    public $timestamps = true; // This is the default, so you can omit it if you want
}