<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;


    protected $fillable = [
        'license_plate',
        'model',
        'year',
    ];
}
