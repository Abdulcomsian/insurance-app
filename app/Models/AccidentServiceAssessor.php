<?php

namespace App\Models;

use App\addAssessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentServiceAssessor extends Model
{
    use HasFactory;
    protected $table = 'accident_service_assessors';
    protected $fillable =
    [
        'assessor_id',
        'accident_service_report_id'
    ];

    public function assessor ()
    {
        return $this->belongsTo(addAssessor::class, 'assessor_id', 'id');
    }
}
