<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    protected $fillable = [
        'PostOfficeName',
        'Pincode',
        'City',
        'District',
        'State',
    ];
}
