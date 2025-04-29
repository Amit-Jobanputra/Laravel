<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'First_Name',
        'Father_Name',
        'Last_Name',
        'Course_id',
        'Enrollment_no',
    ];
}
