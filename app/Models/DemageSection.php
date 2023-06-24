<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemageSection extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'demage_sections';
}
