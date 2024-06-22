<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'categorytype',
        'blogtitle',
        'description',
        'blogpost',
        'vurl',
        'blogimg',
        'status',
    ];
}
