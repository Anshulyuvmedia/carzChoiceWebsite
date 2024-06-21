<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'companyname',
        'companylogo',
        'email',
        'phonenumber',
        'citystateprovince',
        'postalcode',
        'fburl',
        'igurl',
        'yturl',
        'twurl',
        'linkurl',
        'address',
    ];
}
