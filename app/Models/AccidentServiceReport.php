<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccidentServiceReport extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'accident_service_reports';
    protected $fillable =
    [
        'invoice_no',
        'invoice_date',
        'to',
        'tax_invoice',
        'vehicle',
        'rego',
        'assessment_fee',
        'sub_total',
        'gst',
        'grand_total',
        'owner_name',
        'assessment_type',
        'make',
        'engine_type',
        'odometer',
        'model',
        'engine_size',
        'paint_group',
        'series',
        'engine_no',
        'paint_code',
        'month_year',
        'transmission',
        'colour',
        'body_type',
        'axles',
        'vin',
        'assessement_date',
        'cover_type',
        'sum_insured',
        'market_value',
        'salvage_value',
        'settlement',
        'less_excess',
        'settlement_sub_total',
        'settlement_gst',
        'settlement_total',
        'cash_settled',
        'certified_compliance',
        'salvage_condition',
        'comments',
        'total_supps'
    ];
}
