<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterDealer extends Model
{
    protected $fillable = [
        'businessname',
        'dealertype',
        'mobilenumber',
        'whatsappnumber',
        'brands',
        'district',
        'state',
        'pincode',
        'email',
        'businesspics',
        'officepics',
        'userid',
    ];
}
