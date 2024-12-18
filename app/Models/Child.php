<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $table = 'child'; // Specify the correct table name

    protected $fillable = [
        'c_name',
        'c_gender', // Added gender
        'c_city', // Added city
        'c_birth', // Added birth date
        'c_age', // Added age
        'c_weight', // Added weight
        'c_height', // Added height
        'c_vaccine',
        'p_username', // Added parent username
        'p_email',
        'status',
        'scheduled_date',
    ];

    protected $dates = [
        'scheduled_date',
        'c_birth', // Added birth date to dates
    ];


     // Constants for status
     const STATUS_PENDING = 'pending';
     const STATUS_APPROVED = 'approved';
     const STATUS_REJECTED = 'rejected';
}