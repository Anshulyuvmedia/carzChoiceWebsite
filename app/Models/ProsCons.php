<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsCons extends Model
{
    protected $fillable = [
        'vehicleid',
        'pros',
        'cons',
    ];
}
