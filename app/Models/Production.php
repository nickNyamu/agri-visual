<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable = [
        'id',
        'produce_id',
        'region_id',
        'quantity',
        'units',
        'year',
];
}
