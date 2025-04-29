<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorVariant extends Model
{
    protected $fillable = [
        'vehiclename',
        'colors',
    ];
}
