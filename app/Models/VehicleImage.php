<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    protected $fillable = [
        'type',
        'vehicle',
        'title',
        'mediatype',
        'addimage',
        'videourl',
        'color',
    ];
}
