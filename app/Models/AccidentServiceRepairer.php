<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentServiceRepairer extends Model
{
    use HasFactory;
    protected $table = 'accident_service_repairers';

    protected $fillable  =
    [
        'repairer_id',
        'accident_service_report_id'
    ];
}
