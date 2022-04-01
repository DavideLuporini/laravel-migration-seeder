<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'code',
        'departure',
        'destination',
        'departure_time',
        'arrival_time',
        'carriages',
        'in_time',
        'cancelled',
    ];
}
