<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class RegisterUser extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'register_users';
        protected $fillable = [
        'fullname',
        'contactno',
        'email',
        'password',
        'verifystatus',
        'loginstatus',
        'usertype',
    ];
}
