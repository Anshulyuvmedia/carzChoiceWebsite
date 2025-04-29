<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddFeature extends Model
{
    protected $fillable = [
        'vehicleid',
        'features',
    ];
}
