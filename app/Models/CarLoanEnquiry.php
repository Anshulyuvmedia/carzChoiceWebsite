<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarLoanEnquiry extends Model
{
    protected $fillable = [
        'carname',
        'enquirytype',
        'city',
        'fullname',
        'mobileno',
        'enquirystatus',
    ];
}
