<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationList extends Model
{
    protected $fillable = [
        'firstname',
        'phone_number',
        'availability',
        'status',
        'imgUrl',
        'role_to_apply',
        'marks',
    ];

    use HasFactory;
}
