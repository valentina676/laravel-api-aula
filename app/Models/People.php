<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable =[ //fillable = vai descartar outros valores
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