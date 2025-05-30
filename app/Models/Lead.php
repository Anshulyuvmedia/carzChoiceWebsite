<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'fullname',
        'userid',
        'carid',
        'cartype',
        'mobile',
        'email',
        'city',
        'state',
        'vehicle',
        'remarks',
        'leadstatus',
        'dealerid',
        'dealername',
    ];
}
