<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAttribute extends Model
{
    protected $fillable = [
        'cartype',
        'formlabels',
        'value',
        'inputtype',
    ];
}
