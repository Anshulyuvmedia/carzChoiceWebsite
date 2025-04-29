<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    protected $fillable = [
        'category',
        'faqlabel',
        'faqvalue',
    ];
}
