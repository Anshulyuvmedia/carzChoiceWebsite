<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdPost extends Model
{
    protected $fillable = [
        'brandname',
        'carname',
        'modalname',
        'district',
        'state',
        'pincode',
        'price',
        'kilometersdriven',
        'fueltype',
        'registeryear',
        'manufactureyear',
        'ownernumbers',
        'transmissiontype',
        'color',
        'insurance',
        'registertype',
        'lastupdated',
        'images',
        'userid',
        'bodytype',
        'activationstatus',
    ];
}
