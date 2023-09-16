<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'biceps',
        'triceps',
        'arm_5',
        'mobilenumber',
        'jerks',
        'bout',
        'leg_5',
        'date_of_birth',
        'weight',
        'start_date_of_program',
        'fat_content',
        'oxydation_type',
        'fat_content_kg',
        'starting_weight',
        'major_mass',
    ];

    use HasFactory;
}
