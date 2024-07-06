<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSpecification extends Model
{
    protected $fillable = [
        'vehicleid',
        'specifications',
    ];
}
