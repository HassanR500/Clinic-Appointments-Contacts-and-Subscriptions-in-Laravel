<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['department', 'doctor', 'name', 'phone', 'appointment_date'];
}
