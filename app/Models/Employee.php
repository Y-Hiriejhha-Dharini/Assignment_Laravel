<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'profile_photo',
    ];
}
