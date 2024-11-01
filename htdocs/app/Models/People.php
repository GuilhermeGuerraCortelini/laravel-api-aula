<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [ // campos que estão no banco, descara outros valores
        'id',
        'name',
        'email',
        'address',
        'state',
        'country',
        'phone',
        'birthDate',
    ];

    public function interests(){
        return $this->hasMany(Interest::class);
    }
}
