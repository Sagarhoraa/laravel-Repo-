<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccineDate extends Model
{
    protected $table = 'vaccine_dates'; // Specify the table name if different
    protected $fillable = [
        'c_name',
        'p_username',
        'name',
        'v_date',
        'timing',
        'status',
    ];

    // Uncomment if you want to disable timestamps
    // public $timestamps = false;
}