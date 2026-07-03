<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    /** @use HasFactory<\Database\Factories\SystemUserFactory> */
    use HasFactory;

    $fillable = [

        'role_id',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'status',
    
    ];      
}
