<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostOffices extends Model
{
    protected $fillable = [
        'CircleName',
        'RegionName',
        'DivisionName',
        'OfficeName',
        'Pincode',
        'OfficeType',
        'Delivery',
        'District',
        'StateName',
    ];
}
