<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompareVehicle extends Model
{
    protected $fillable = [
        'adminid',
        'userid',
        'vehicles',
    ];
}
