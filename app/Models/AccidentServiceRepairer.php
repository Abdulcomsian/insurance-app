<?php

namespace App\Models;

use App\Repairer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccidentServiceRepairer extends Model
{
    use HasFactory;
    protected $table = 'accident_service_repairers';

    protected $fillable  =
    [
        'repairer_id',
        'accident_service_report_id'
    ];

    public function repairers () :BelongsTo
    {
        return $this->belongsTo(Repairer::class, 'repairer_id', 'id');
    }
}
