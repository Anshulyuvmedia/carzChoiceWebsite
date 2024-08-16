<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceLead extends Model
{
    protected $fillable = [
        'brandname',
        'carname',
        'modalname',
        'city',
        'registerdate',
        'fullname',
        'emailaddress',
        'phonenumber',
    ];
}
