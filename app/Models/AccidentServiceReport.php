<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccidentServiceReport extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'accident_service_reports';
    const PATH = 'accident-report-files/';
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
        'total_supps',
        'file',
        'overall',
        'interior',
        'exterior',
        'steering',
        'brakes',
        'tyre_depth_unit_front',
        'tyre_depth_unit_rear',
        'rh_front',
        'lh_front',
        'rh_rear',
        'lh_rear',
        'vehicle_and_suspension_condition',
        'user_id',
        'claim_no',
        'policy_no',
        'comment_damange_details'
    ];

    public function serviceAssessors () :HasMany
    {
        return $this->hasMany(AccidentServiceAssessor::class);
    }

    public function serviceRepairers () :HasMany
    {
        return $this->hasMany(AccidentServiceRepairer::class);
    }

    public function demageValues () :HasMany
    {
        return $this->hasMany(DemageSectionValue::class);
    }

    public function suppValues () :HasMany
    {
        return $this->hasMany(SuppsValue::class);
    }

    public function assessmentReports ():HasMany
    {
        return $this->hasMany(DetailAssessmentReport::class);
    }

    public function user () :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
