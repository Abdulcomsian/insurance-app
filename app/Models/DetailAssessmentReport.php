<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailAssessmentReport extends Model
{
    use HasFactory;
    protected $table = 'detail_assessment_reports';

    protected $guarded = ['id'];

    public function reportProduct ()  :BelongsTo
    {
        return $this->belongsTo(AssessmentReportProduct::class, 'assessment_report_product_id', 'id');
    }
}
