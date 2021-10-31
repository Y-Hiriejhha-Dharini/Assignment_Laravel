<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'telephone',
        'logo_path',
        'photo_path',
        'website',
        'address',
    ];
}
