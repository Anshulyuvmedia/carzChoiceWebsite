<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddVariant extends Model
{
    protected $fillable = [
        'carname',
        'brandname',
        'carmodalname',
        'availabelstatus',
        'price',
        'pricetype',
        'bodytype',
        'mileage',
        'engine',
        'fueltype',
        'transmission',
        'seatingcapacity',
        'userreportedmilage',
        'keyfeatures',
        'summary',
        'showhidestatus',
        'brochure',
    ];
}
