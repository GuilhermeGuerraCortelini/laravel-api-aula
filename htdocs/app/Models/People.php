<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [ // atribuir em massa
        'id',
        'name',
        'email',
        'address',
        'state',
        'country',
        'phone',
        'birthDate',
    ];

}
