<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addAssessor extends Model
{
    protected $table = 'assessors';
    protected $fillable = ['assessor', 'email', 'phone_number', 'mobile_number', 'inspection_date', 'assessment_date', 'address'];
}
