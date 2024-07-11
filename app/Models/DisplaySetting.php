<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplaySetting extends Model
{
    protected $fillable = [
        'vehicleid',
        'type',
        'category',
    ];
}
