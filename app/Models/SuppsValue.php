<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class SuppsValue extends Model
{
    use HasFactory;
    protected $table = 'supps_values';
    protected $fillable =
    [
        'quoted',
        'assessed',
        'variance',
        'supp_id',
        'accident_service_report_id'
    ];
}
