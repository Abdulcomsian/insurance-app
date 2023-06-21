<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addAssessor extends Model
{
    protected $fillable = ['assessor', 'email', 'phone_number', 'mobile_number', 'inspection_date', 'assessment_date', 'address'];
}
