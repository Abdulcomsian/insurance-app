<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repairer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact',
        'phone',
        'mobile',
        'address',
    ];
}
