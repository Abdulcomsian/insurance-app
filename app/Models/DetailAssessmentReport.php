<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAssessmentReport extends Model
{
    use HasFactory;
    protected $table = 'detail_assessment_reports';

    protected $guarded = ['id'];
}
