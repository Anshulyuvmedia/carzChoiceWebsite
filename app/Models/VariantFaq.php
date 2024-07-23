<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantFaq extends Model
{
    protected $fillable = [
        'vehicleid',
        'faqlabel',
        'faqvalue',
    ];
}
