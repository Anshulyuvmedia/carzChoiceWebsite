<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddVariant extends Model
{
    protected $fillable = [
        'carname',
        'carmodalname',
        'availabelstatus',
        'price',
        'pricetype',
        'mileage',
        'engine',
        'fueltype',
        'transmission',
        'seatingcapacity',
        'userreportedmilage',
        'keyfeatures',
        'summary',
    ];
}
